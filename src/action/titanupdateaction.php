<?php

namespace App\Action;

use App\Domain\User\Service\TitanUpdate;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class TitanUpdateAction
{
  private $titanUpdate;

  public function __construct(TitanUpdate $titanUpdate)
  {
    $this->titanUpdate = $titanUpdate;
  }

  public function __invoke(
    ServerRequestInterface $request,
    ResponseInterface $response
    ): ResponseInterface {


      $data = (array) $request->getParsedBody();

      $rowCount = $this->titanUpdate->updateTitan($data);

      $result = [
        'success' => $rowCount == 1 ? true : false
      ];

      $response->getBody()->write((string)json_encode($result));

      return $response
      ->withHeader('Content-Type', 'application/json')
      ->withStatus(200);
    }
}
