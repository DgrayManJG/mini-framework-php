<?php
namespace Controller;

use Model\TermManager;

/**
 * Gere l'affichage des pages statiques et ennuyantes du site
 */
class PageController extends Controller
{

  /**
  * page d'accueil
  */
  public function home()
  {
    $termManger = new TermManager();
    $randomTerm = $termManger->findOneByRandom();

    $this->render('home.html.twig', array('randomTerm' => $randomTerm));
  }

  /**
  * page d'accueil
  */
  public function faq()
  {
    $this->render('faq.html.twig');
  }

  /**
  * page VueJS
  */
  public function vuejs()
  {
    $this->render('vuejs.html.twig');
  }

}

 ?>
