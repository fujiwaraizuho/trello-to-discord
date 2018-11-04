<?php

require_once __DIR__."/../vendor/autoload.php";

use Trello\Client;
use Trello\Manager;

function configLoad() {
    $file = file_get_contents(__DIR__."/../config.json");
    $config = json_decode($file);

    return $config;
}

function sessionStart(String $trello_api_key, String $trello_token) {
    $client = new Client();
    $client->authenticate($trello_api_key, $trello_token, Client::AUTH_URL_CLIENT_ID);

    $manager = new Manager($client);

    return $manager;
}

