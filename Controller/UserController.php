<?php
namespace Controller;

use Controller\Validator\UserValidator;
use Model\UserManager;
use Controller\Security;
/**
 * controller pour l'utilisateur, connection, inscription, deconnexion, profil etc..
 */
class UserController extends Controller
{

  public function inscription($post)
  {
    if (!empty($post)) {
      $UserValidator = new UserValidator();
      $data = $UserValidator->subscribeValidate($post);
      $security = new Security();

      if ($data['validate'] === true) {
        $userManager = new UserManager();
        $return = $userManager->insertUser($data);
        if ($return) {
          $security->initSession(array('success' => "L'utilisateur à bien été enregistrer, vous pouvez maintenant vous connecter"));
          $this->render('registration.html.twig');
        } else {
          $security->initSession(array('errors' => "une erreur est survenue lors de l'insertion en bdd réessayer plus tard"));
          $this->render('registration.html.twig');
        }
      } else {
        $this->render('registration.html.twig', array('param' => $data));
      }
    } else {
      $this->render('registration.html.twig');
    }
  }

  public function connection($post)
  {
    if (!empty($post)) {
      $UserValidator = new UserValidator();
      $data = $UserValidator->loginValidate($post);
      $security = new Security();

      if ($data['validate'] === true) {
        $security->initSession(array('username' => $data['username']));
        header("Location: ?page=accueil");
      } else {
        $this->render('connection.html.twig', array('param' => $data));
      }
    } else {
      $this->render('connection.html.twig');
    }
  }

  public function deconnexion($post)
  {
    $security = new Security();
    $security->unsetSession(array('username'));
    header("Location: ?page=accueil");
  }


}

 ?>
