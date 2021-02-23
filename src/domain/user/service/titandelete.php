<?php

namespace App\Domain\User\Service;

use App\Domain\User\Repository\TitanDeleteRepository;
use App\Domain\User\Model\Titan;
use App\Exception\ValidationException;

final class TitanDelete
{

    private $repository;

    public function __construct(TitanDeleteRepository $repository)
    {
      $this->repository = $repository;
    }

    public function deleteById(int $titanId): int
    {
      if(empty($titanId)) {
        throw new ValidationException('código do usuário requerido!');
      }

      $rowCount = $this->repository->deleteById($titanId);

      return $rowCount;

    }

}
