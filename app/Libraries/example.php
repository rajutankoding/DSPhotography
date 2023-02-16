<?php
include('WhatsappAPI.php'); // include given API class and update API credentials in it

$obj = new WhatsappAPI("2853", "e10e6833dda02a5458dce20f4a5f1d84ea2524a7"); // create an object of the WhatsappAPI class with your user id and api key
$status = $obj->send("+971123456789", "Hello%0AWorld"); // NOTE: Phone Number should be with country code

$status = json_decode($status);

print_r($status);
