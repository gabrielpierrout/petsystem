<?php

use \App\Http\Response;
use \App\Controller\Pages;

//ROTA HOME
$obRouter->get('/',[
    function(){
        return new Response(200,Pages\Home::getHome());
    }
]);

$obRouter->get('/sobre',[
    function(){
        return new Response(200,Pages\About::getAbout());
    }
]);

$obRouter->get('/costumers',[
    function(){
        return new Response(200,Pages\Costumers::getCostumers());
    }
]);

$obRouter->get('/pets',[
    function(){
        return new Response(200,Pages\Pets::getPets());
    }
]);

$obRouter->get('/add-pet',[
    function(){
        return new Response(200,Pages\AddPet::getAddPet());
    }
]);

$obRouter->post('/add-pet',[
    function($request){
        echo "<pre>";
        print_r($request);
        echo "</pre>";
        return new Response(200,Pages\AddPet::insertPet($request));
    }
]);