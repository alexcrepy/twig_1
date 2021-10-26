<?php

require __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];


echo $twig->render('products.html.twig', ['products' => $products]);