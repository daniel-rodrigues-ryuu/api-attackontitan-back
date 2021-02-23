<?php

namespace App\Domain\User\Repository;

use PDO;
use App\Domain\User\Model\Titan;
use DomainException;

class TitanDeleteRepository
{
  private $connection;

  public function __construct(PDO $connection)
  {
    $this->connection = $connection;
  }

  public function deleteById(int $titanId): int
  {

    $sql = "DELETE FROM titans WHERE id = :id;";

    $statement = $this->connection->prepare($sql);
    $statement->execute(['id' => $titanId]);

    return (int) $statement->rowCount();
  }
}
