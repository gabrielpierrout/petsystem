<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Pets extends Page{

    /**
     * @return string
     */
    public static function getPets(){
        // View de Clientes 
        $content = View::render('pages/pets',[

        ]);

        // Retorna a view da página
        return parent::getPage('PetSystem - Animais', $content);
    }
    
}