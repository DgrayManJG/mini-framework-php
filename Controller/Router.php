<?php
namespace Controller;
/**
 *
 */
class Router
{
  public function execute($page)
  {
    switch ($page) {

      case "accueil":
        $controller = new \Controller\PageController();
        $controller->home();
        break;

      case "faq":
        $controller = new \Controller\PageController();
        $controller->faq();
        break;

      case "list":
        $controller = new \Controller\TermController();
        $controller->liste();
        break;

      case "detail":
        $id = $_GET['id'];
        $controller = new \Controller\TermController();
        $controller->detail($id);
        break;

      case "connection":
        $controller = new \Controller\UserController();
        $controller->connection($_POST);
        break;

      case "inscription":
        $controller = new \Controller\UserController();
        $controller->inscription($_POST);
        break;

      case "deconnexion":
        $controller = new \Controller\UserController();
        $controller->deconnexion();
        break;

      // si on se rend ici, c'est que c'est une erreur 404
      default:
        $controller = new \Controller\Controller();
        $controller->pageNotFound();
        break;
    }
  }

}


 ?>
