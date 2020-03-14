<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Accounts;


class MainController extends AbstractController{
     /**
      * @Route("/", name="index")
      */
	public function index() {
		return $this->render('index.html.twig');
	}

	/**
      * @Route("/books", name="books")
      */
	  public function books() {
		return $this->render('staj-site/book.html.twig', []);
	}

	/**
      * @Route("/about_us", name="aboutUs")
      */
	  public function aboutUs() {
		return $this->render('staj-site/about_us.html.twig', []);
	}

	/**
      * @Route("/setting", name="setting")
      */
	  public function setting() {
		return $this->render('staj-site/setting.html.twig', []);
	}

	/**
      * @Route("/register", name="register")
      */
	  public function register() {
		return $this->render('staj-site/register.html.twig', []);
	}

	/**
      * @Route("/sign_in", name="signIn")
      */
	  public function signIn() {
		return $this->render('staj-site/sign_in.html.twig', []);
	}

	/**
     * @Route("/search_user_name", name="searchUserName")
     */
    public function searchUserName(Request $request) {
		$user_name = $request->request->get('user_name');	
		$repository = $this->getDoctrine()->getRepository(Accounts::class);
		$accounts = $repository->searchUserName($user_name);
		if($accounts) 
			return $this->render('staj-site/error_register.html.twig', []);
		
		// return $this->render('staj-site/success_register.html.twig', ["accounts" => $accounts]);
    }

	/**
     * @Route("/search_account", name="searchAccount")
     */
    public function searchAccount(Request $request) {
		$user_name = $request->request->get('user_name');
		$repository = $this->getDoctrine()->getRepository(Accounts::class);
		$accounts = $repository->searchUserName($user_name);
		// return $this->render('staj-site/error_register.html.twig', ["accounts" => $accounts]);
    }
}

?>