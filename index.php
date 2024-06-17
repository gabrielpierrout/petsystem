<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;
use \WilliamCosta\DotEnv\Environment;

// Carrega variáveis de ambiente
Environment::load(__DIR__);

// Define a constante de URL
define('URL',getenv('URL'));

// Define o valor padrão das variáveis
View::init([
    'URL' => URL
]);

// Inicia o router
$obRouter = new Router(URL);

include __DIR__.'/routes/pages.php';

// Imprime o Response da Rota
$obRouter->run()->sendResponse();
