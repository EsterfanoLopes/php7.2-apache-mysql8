<?php

$loader = require '../../vendor/autoload.php';
$loader->add('AppName', __DIR__.'/../src/');

use App\Controller\Dumb;

$dotenv = Dotenv\Dotenv::create(__DIR__, '/../../.env');
$dotenv->load();

$pdo = new PDO('mysql:host=mysql;dbname='.$_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);

$dumb = new Dumb();
echo $dumb->plus(2, 2);
