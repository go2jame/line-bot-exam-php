<?php
require "vendor/autoload.php";
$access_token = 'rr4o/e3sR1ubo0eraK7e2TpYAkWdT/6qSkxPO2vj++F6JBiDQ/uqQVv2oRyEgA0kEY6mWjf4tEFYK4CP9GGPcvz3ksNTLDTGqUk9fh3pXoufmzPX/ttheMBMx7Y0y4LGkx00/GbvPfgtnC2+dZPvswdB04t89/1O/w1cDnyilFU=';
$channelSecret = '33ef4c5f8ccebb2ca7e2975222de7b4d';
$idPush = $_GET['id'];
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();