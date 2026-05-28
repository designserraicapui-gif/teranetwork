<?php

require 'vendor/autoload.php';

use RouterOS\Client;
use RouterOS\Query;

$client = new Client([
'host' => '192.168.0.1',
'user' => 'admin',
'pass' => 'senha',
'port' => 8728,
]);

$query = new Query('/ppp/active/print');

$usuarios = $client->query($query)->read();

print_r($usuarios);

?>