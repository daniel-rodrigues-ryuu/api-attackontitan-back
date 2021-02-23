<?php

namespace App\Action;

use App\Domain\User\Service\TitanCreator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class TitanCreateAction
{
  private $titanCreator;

  public function __construct(TitanCreator $titanCreator)
  {
    $this->titanCreator = $titanCreator;
  }

  public function __invoke(
    ServerRequestInterface $request,
    ResponseInterface $response
    ): ResponseInterface {

      $data = (array) $request->getParsedBody();

      $titanId = $this->titanCreator->createTitan($data);

      $result = [
        'titan_id' => $titanId
      ];

      $response->getBody()->write((string)json_encode($result));

      return $response
      ->withHeader('Content-Type', 'application/json')
      ->withStatus(201);

    }
}
