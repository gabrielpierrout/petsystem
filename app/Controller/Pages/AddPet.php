<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class AddPet extends Page{

    /**
     * @return string
     */
    public static function getAddPet(){
        // View de Clientes 
        $content = View::render('pages/add-pet',[

        ]);

        // Retorna a view da página
        return parent::getPage('PetSystem - Adicionar novo Pet', $content);
    }
    
}