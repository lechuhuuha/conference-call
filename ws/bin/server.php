<?php

// require 'vendor/autoload.php';
require '../../vendor/autoload.php';

use Amir\Comm;
use Ratchet\App;

//set an array of origins allowed to connect to this server
$allowed_origins = ['localhost', '127.0.0.1'];

// Run the server application through the WebSocket protocol on port 8080
$app = new App('192.168.100.8', 8080, '0.0.0.0'); //App(hostname, port, 'whoCanConnectIP', '')

//create socket routes
//route(uri, classInstance, arrOfAllowedOrigins)
$app->route('/comm', new Comm, ['*']);

//run websocket
$app->run();
