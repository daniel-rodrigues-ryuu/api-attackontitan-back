<?php

namespace App\Domain\User\Service;

use App\Domain\User\Repository\TitanListRepository;

final class TitanList
{

    private $repository;

    public function __construct(TitanListRepository $repository)
    {
      $this->repository = $repository;
    }

    public function findAll()
    {
      $titans = $this->repository->findAll();

      return $titans;
    }

}
