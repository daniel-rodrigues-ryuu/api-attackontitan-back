<?php

namespace App\Action;

use App\Domain\User\Service\TitanDelete;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class TitanDeleteAction
{
  private $titanDelete;

  public function __construct(TitanDelete $titanDelete)
  {
    $this->titanDelete = $titanDelete;
  }

  public function __invoke(
    ServerRequestInterface $request,
    ResponseInterface $response,
    array $args = []
    ): ResponseInterface {

      $titanId = (int) $args['id'];

      $rowCount = $this->titanDelete->deleteById($titanId);

      $result = [
        'success' => $rowCount == 1 ? true : false
      ];

      $response->getBody()->write((string)json_encode($result));

      return $response
      ->withHeader('Content-Type', 'application/json')
      ->withStatus(200);

    }
}
