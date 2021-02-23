<?php

namespace App\Domain\User\Repository;

use PDO;
use App\Domain\User\Model\Titan;
use DomainException;

class TitanReaderRepository
{
  private $connection;

  public function __construct(PDO $connection)
  {
    $this->connection = $connection;
  }

  public function getTitanById(int $titanId): Titan //retorna um objeto usuario
  {

    $sql = "SELECT id, name, age, last_name, titan, height, height_titan FROM titans WHERE id = :id;";
    $statement = $this->connection->prepare($sql);
    $statement->execute(['id' => $titanId]);

    $row = $statement->fetch();

    $titan = new Titan();
    $titan->id = (int) $row['id'];
    $titan->name = (string) $row['name'];
    $titan->age = (int) $row['age'];
    $titan->lastName = (string) $row['last_name'];
    $titan->titan = (string) $row['titan'];
    $titan->height = (double) $row['height'];
    $titan->heightTitan = (int) $row['height_titan'];

    return $titan;

  }
}
