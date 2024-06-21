<?php 

require __DIR__.'/includes/app.php';

use \App\Http\Router;

// Inicia o router
$obRouter = new Router(URL);

include __DIR__.'/routes/pages.php';

// Imprime o Response da Rota
$obRouter->run()->sendResponse();
