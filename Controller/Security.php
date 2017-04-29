<?php
namespace Controller;

/**
 * Class qui va s'occuper de la sécuriter de l'application
 * initialiser les session, les unsets etc ..
 */
class Security
{

  /**
  * Initilise les sessions
  */
  public function initSession($data)
  {
    foreach ($data as $key => $value) {
      $_SESSION[$key] = $value;
    }
  }

  /**
  * détruit les sessions
  */
  public function unsetSession($data)
  {
    foreach ($data as $key) {
      unset($_SESSION[$key]);
    }
  }

}


 ?>
