<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;

define('URL', 'http://localhost/petsystem');

// Define o valor padrão das variáveis
View::init([
    'URL' => URL
]);

// Inicia o router
$obRouter = new Router(URL);

include __DIR__.'/routes/pages.php';

// Imprime o Response da Rota
$obRouter->run()->sendResponse();
