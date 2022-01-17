<?php
include __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(getcwd());
$dotenv->load();

$client = new BigCommerce\ApiV3\Client(
    $_ENV['STORE_HASH'], $_ENV['CLIENT_ID'], $_ENV['ACCESS_TOKEN']
);

$products = $client->catalog()->products()->getAll()->getProducts();

echo "There were ", count($products), " fetched!", PHP_EOL;
