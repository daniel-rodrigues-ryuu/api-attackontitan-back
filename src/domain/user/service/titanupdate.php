<?php

namespace App\Domain\User\Service;

use App\Domain\User\Repository\TitanUpdateRepository;
use App\Exception\ValidationException;

final class TitanUpdate
{

    private $repository;

    public function __construct(TitanUpdateRepository $repository)
    {
      $this->repository = $repository;
    }

    public function updateTitan(array $data): int //rowCount
    {
      $this->validateNewTitan($data);


      $rowCount = $this->repository->updateTitan($data);

      return $rowCount;

    }

    private function validateNewTitan(array $data): void
    {
      $errors = [];

      if(empty($data['name'])) {
        $errors['name'] = 'Precisa digitar o name';
      }

      if($errors) {
        throw new ValidationException('Por favor verifique os dados digitados', $errors);
      }

    }

}
