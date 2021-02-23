<?php

namespace App\Domain\User\Repository;

use PDO;

class TitanCreatorRepository
{
  private $connection;

  public function __construct(PDO $connection)
  {
    $this->connection = $connection;
  }

  public function insertTitan(array $titan): int
  {
    $row = [
      'name' => $titan['name'],
      'age' => $titan['age'],
      'last_name' => $titan['last_name'],
      'titan' => $titan['titan'],
      'height' => $titan['height'],
      'height_titan' => $titan['height_titan'],
    ];

    $sql = "INSERT INTO titans SET
            name=:name,
            age=:age,
            last_name=:last_name,
            titan=:titan,
            height=:height,
            height_titan=:height_titan;";

    $this->connection->prepare($sql)->execute($row);

    return (int) $this->connection->lastInsertId();
  }
}
