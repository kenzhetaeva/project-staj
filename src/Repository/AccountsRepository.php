<?php

namespace App\Repository;

use App\Entity\Accounts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Accounts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Accounts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Accounts[]    findAll()
 * @method Accounts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Accounts::class);
    }

    public function searchUserName($user_name)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.user_name LIKE :user_name')
            ->setParameter('user_name', $user_name)
            ->getQuery()
            ->getResult()
        ;
    }
	
	public function searchAccount($user_name, $password)
    {
        return $this->createQueryBuilder('a')
			//ask agay
            ->andWhere('a.user_name LIKE :user_name', 'a.password LIKE :password')
			//ask agay
            ->setParameter('user_name', $user_name)
			->setParameter('password', $password)
            ->getQuery()
            ->getResult()
        ;
    }

    // /**
    //  * @return Accounts[] Returns an array of Accounts objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Accounts
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
