<?php
use Slim\App;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

return function (App $app) {

    $app->get('/', function (
        ServerRequestInterface $request,
        ResponseInterface $response
    ) {
        $response->getBody()->write('Hello, World!');

        return $response;
    });

    $app->get('/home',\App\Action\HomeAction::class)->setName('home');

    $app->post('/users',\App\Action\TitanCreateAction::class);

    $app->get('/users',\App\Action\TitanListAction::class);

   $app->get('/users/{id}',\App\Action\TitanReaderAction::class);

   $app->put('/users',\App\Action\titanUpdateAction::class);

  $app->delete('/users/{id}',\App\Action\TitanDeleteAction::class);

};
