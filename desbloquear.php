<?php

$query = new Query('/ppp/secret/set');

$query->equal('.id','*1');

$query->equal('disabled','no');

$client->query($query)->read();

?>