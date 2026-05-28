<?php

$curl = curl_init();

curl_setopt_array($curl, [
CURLOPT_URL => "https://sandbox.asaas.com/api/v3/payments",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => json_encode([
'customer' => 'cus_000000',
'billingType' => 'PIX',
'value' => 99.90,
'dueDate' => '2026-06-10'
]),
CURLOPT_HTTPHEADER => [
'accept: application/json',
'content-type: application/json',
'access_token: SUA_API_KEY'
],
]);

$response = curl_exec($curl);

curl_close($curl);

echo $response;

?>