<?php

namespace App\Domain\User\Repository;

use PDO;

class TitanUpdateRepository
{
  private $connection;

  public function __construct(PDO $connection)
  {
    $this->connection = $connection;
  }

  public function updateTitan(array $titan): int
  {
    $row = [
      'id' => $titan['id'],
      'name' => $titan['name'],
      'age' => $titan['age'],
      'last_name' => $titan['last_name'],
      'titan' => $titan['titan'],
      'height' => $titan['height'],
      'height_titan' => $titan['height_titan'],
    ];

    $sql = "UPDATE titans SET
            name=:name,
            age=:age,
            last_name=:last_name,
            titan=:titan,
            height=:height,
            height_titan=:height_titan
            WHERE id=:id;";

    $statement = $this->connection->prepare($sql);
    $statement->execute($row);

    return (int) $statement->rowCount();
  }
}
