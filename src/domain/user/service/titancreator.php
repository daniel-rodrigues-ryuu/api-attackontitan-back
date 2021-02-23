<?php

namespace App\Domain\User\Service;

use App\Domain\User\Repository\TitanCreatorRepository;
use App\Exception\ValidationException;

final class TitanCreator
{

    private $repository;

    public function __construct(TitanCreatorRepository $repository)
    {
      $this->repository = $repository;
    }

    public function createTitan(array $data): int
    {
      $this->validateNewTitan($data);

      $titanId = $this->repository->insertTitan($data);

      return $titanId;

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
