<?php

require_once(__DIR__ . "/Parsers/UrlParser.php");

$url = 'https://yandex.ru/';
$parser = new UrlParser();

$parser->setUrl($url);

echo '<pre>';
print_r($parser->getClearLinks());
echo '</pre>';
