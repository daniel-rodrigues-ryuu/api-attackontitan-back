<?php

namespace App\Action;

use App\Domain\User\Service\TitanReader;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class TitanReaderAction
{
  private $titanReader;

  public function __construct(TitanReader $titanReader)
  {
    $this->titanReader = $titanReader;
  }

  public function __invoke(
    ServerRequestInterface $request,
    ResponseInterface $response,
    array $args = []
    ): ResponseInterface {

      $titanId = (int) $args['id'];

      $titan = $this->titanReader->getTitanById($titanId);

      $result = [
        'titan_id' => $titan->id,
        'name' => $titan->name,
        'age' => $titan->age,
        'last_name' => $titan->lastName,
        'titan' => $titan->titan,
        'height' => $titan->height,
        'height_titan' => $titan->heightTitan,
      ];

      $response->getBody()->write((string)json_encode($result));

      return $response
      ->withHeader('Content-Type', 'application/json')
      ->withStatus(200);

    }
}
