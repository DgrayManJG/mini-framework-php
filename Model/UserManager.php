<?php
namespace Model;

/**
 *
 */
class UserManager
{

  private $dbh;

  public function __construct()
  {
    $this->dbh = Db::connect();
  }

  public function insertUser($data)
  {
    $sth = $this->dbh->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $sth->bindParam(':username', $data['username'], \PDO::PARAM_STR);
    $sth->bindParam(':email', $data['email'], \PDO::PARAM_STR);
    $sth->bindParam(':password', $data['password'], \PDO::PARAM_STR);

    return $sth->execute();
  }

  public function getUserByUsername($username)
  {
    $sth = $this->dbh->prepare("SELECT * FROM users WHERE username = :username");
    $sth->bindValue(':username', $username);
    $sth->execute();

    $result = $sth->fetch();

    return $result;
  }

}


 ?>
