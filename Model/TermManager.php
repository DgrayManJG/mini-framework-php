<?php
namespace Model;
/**
 * sert à faire toutes les requêtes SQL à la table 'terms'
 */
class TermManager
{
  // contient la connexion a la bdd
  private $dbh;

  /**
  * appelée a chaque fois qu'on crée une instance du TermManager
  */
  public function __construct()
  {
    $this->dbh = Db::connect();
  }

  /**
  * récupère un terme au hasard
  */
  public function findAll()
  {
    $sql = "SELECT * FROM terms";

    $stmt = $this->dbh->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_CLASS, "\Model\Term");
  }

  /**
  * récupère un terme au hasard
  */
  public function findOneById($id)
  {
    $sql = "SELECT * FROM terms WHERE id = :id";

    $stmt = $this->dbh->prepare($sql);
    $stmt->bindValue(':id', $id);

    $stmt->execute();
    return $stmt->fetchObject("\Model\Term");
  }

  /**
  * récupère un terme au hasard
  */
  public function findOneByRandom()
  {
    $sql = "SELECT * FROM terms
            ORDER BY RAND()
            LIMIT 1";

    $stmt = $this->dbh->prepare($sql);
    $stmt->execute();
    return $stmt->fetchObject("\Model\Term");
  }

}
