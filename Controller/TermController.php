<?php
namespace Controller;

use Model\TermManager;

/**
 * Gere l'affichage des pages statiques et ennuyantes du site
 */
class TermController extends Controller
{

  /**
  * liste des terms
  */

  public function liste()
  {
    $termManager = new TermManager();
    $listTerm = $termManager->findAll();

    $this->render('list.html.twig', array('listTerm' => $listTerm));
  }


  /**
  * page d'accueil
  */
  public function detail($id)
  {
    if (empty($id)) {
      return $this->pageNotFound();
    }

    $termManager = new TermManager();
    $detailTerm = $termManager->findOneById($id);

    $this->render('detail.html.twig', array('detailTerm' => $detailTerm));
  }

}

 ?>
