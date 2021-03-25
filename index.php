<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$prices = json_decode(file_get_contents("assets/price.json"), TRUE);

echo $twig->render('index.html.twig', [
    'prices' => $prices, 
]);