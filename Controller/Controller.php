<?php
namespace Controller;
/**
 *
 */
class Controller
{

  /**
  * affiche un template twig
  */
  protected function render($template, array $data = [])
  {
    $loader = new \Twig_loader_Filesystem('View/templates');
    $twig = new \Twig_Environment($loader, array(
      'cache' => "View/cache",
      'debug' => true
    ));
    $twig->addGlobal('session', $_SESSION);
    $twig->addExtension(new \Twig_Extension_Debug());

    echo $twig->render($template, $data);
  }

  /**
  * affiche une page d'erreur 404
  */
  public function pageNotFound()
  {
    //modifie les entêtes pour indiquer un code 404
    header("HTTP/1.0 404 Not Found");

    $this->render("error404.html.twig");
  }

}

 ?>
