<?php
/** @var \pmill\AwsCognito\CognitoClient $client */
$client = require(__DIR__ . '/bootstrap.php');

$username = 'test@example.com';
$password = 'Pass1worD';

$authenticationResponse = $client->authenticate($username, $password);
var_dump($authenticationResponse);
