<?php

namespace App\Domain\User\Service;

use App\Domain\User\Repository\TitanReaderRepository;
use App\Domain\User\Model\Titan;
use App\Exception\ValidationException;

final class TitanReader
{

    private $repository;

    public function __construct(TitanReaderRepository $repository)
    {
      $this->repository = $repository;
    }

    public function getTitanById(int $titanId): Titan
    {
      if(empty($titanId)) {
        throw new ValidationException('código do usuário requerido!');
      }

      $titan = $this->repository->getTitanById($titanId);

      return $titan;

    }

}
