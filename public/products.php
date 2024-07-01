<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader, ['debug' => true]);

$twig->addExtension(new \Twig\Extension\DebugExtension());

$products = ['A Court of Thorns and Roses', 'A Court of Mist and Fury', 'A Court of Wings and Ruin', 'A Court of Frost and Starlight', 'A Court of Silver Flames'];

echo $twig->render('products.html.twig', ['products' => $products]);

echo $twig->render('home.html.twig');