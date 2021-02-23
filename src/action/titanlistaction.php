<?php

namespace App\Action;

use App\Domain\User\Service\TitanList;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class TitanListAction
{
  private $titanList;

  public function __construct(TitanList $titanList)
  {
    $this->titanList = $titanList;
  }

  public function __invoke(
    ServerRequestInterface $request,
    ResponseInterface $response
    ): ResponseInterface {

      $titans = $this->titanList->findAll();

      $result = [
        'titans' => $titans
      ];

      $response->getBody()->write((string)json_encode($result));

      return $response
      ->withHeader('Content-Type', 'application/json')
      ->withStatus(200);

    }
}
