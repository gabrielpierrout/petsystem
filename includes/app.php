<?php

require __DIR__.'/../vendor/autoload.php';

use \App\Utils\View;
use \WilliamCosta\DotEnv\Environment;
use \WilliamCosta\DatabaseManager\Database;

// Carrega variáveis de ambiente
Environment::load(__DIR__.'/../');

// Configurações de banco de dados
Database::config(
    getenv('DB_HOST'),
    getenv('DB_NAME'),
    getenv('DB_USER'),
    getenv('DB_PASS'),
    getenv('DB_PORT')
);

// Define a constante de URL
define('URL',getenv('URL'));

// Define o valor padrão das variáveis
View::init([
    'URL' => URL
]);