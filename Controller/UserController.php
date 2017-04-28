<?php
namespace Controller;

use Controller\Validator\UserValidator;
use Model\UserManager;
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

      if ($data['validate'] === true) {
        $userManager = new UserManager();
        $return = $userManager->insertUser($data);
        if ($return) {
          $_SESSION['success'] = "L'utilisateur à bien été enregistrer, vous pouvez maintenant vous connecter";
          $this->render('registration.html.twig');
        } else {
          $_SESSION['errors'] = "une erreur est survenue lors de l'insertion en bdd réessayer plus tard";
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

      if ($data['validate'] === true) {
        $_SESSION['username'] = $data['username'];
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
    unset($_SESSION['username']);
    header("Location: ?page=accueil");
  }


}

 ?>
