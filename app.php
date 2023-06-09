<?php

# Sistema de chat com websocket em PHP
# Feito com carinho por Eduardo Palandrani

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use WebSockets\socket;

require 'vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Socket()
        )
    ),
    8008
);

$server->run();
?>
