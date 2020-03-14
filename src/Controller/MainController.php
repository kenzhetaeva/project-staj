<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


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
}

?>