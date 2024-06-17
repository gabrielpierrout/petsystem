<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Costumers extends Page{

    /**
     * @return string
     */
    public static function getCostumers(){
        // View de Clientes 
        $content = View::render('pages/costumers',[

        ]);

        // Retorna a view da página
        return parent::getPage('PetSystem - Clientes', $content);
    }
    
}