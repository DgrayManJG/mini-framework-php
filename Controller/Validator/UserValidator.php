<?php
namespace Controller\Validator;

use Model\UserManager;
/**
 *
 */
class UserValidator
{
    public function subscribeValidate($post)
    {
      if (!empty($post['username']) && !empty($post['email']) && !empty($post['password'])) {

        $username = trim(strip_tags(htmlspecialchars($post['username'])));
        $email = trim(strip_tags(htmlspecialchars($post['email'])));
        $password = trim(strip_tags(htmlspecialchars($post['password'])));
        $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 13]);
        return array('validate' => true,
                     'username' => $username,
                     'email' => $email,
                     'password' => $password);

      } else {
        $_SESSION['errors'] = "bad Credential";
        return array('validate' => false,
                     'username' => $post['username'],
                     'email' => $post['email'],
                     'password' => $post['password']);
      }
    }

    public function loginValidate($post)
    {
      if (!empty($post['username']) && !empty($post['password'])) {

        $username = trim(strip_tags(htmlspecialchars($post['username'])));
        $password = trim(strip_tags(htmlspecialchars($post['password'])));

        $userManager = new UserManager();
        $user = $userManager->getUserByUsername($username);

        if (password_verify($password, $user['password'])) {
          return array('validate' => true,
                       'username' => $username);
        } else {
          $_SESSION['errors'] = "wrong password";
          return array('validate' => false,
                       'username' => $username);
        }

      } else {
        $_SESSION['errors'] = "bad Credential";
        return array('validate' => false,
                     'username' => $post['username'],
                     'password' => $post['password']);
      }
    }
}

 ?>
