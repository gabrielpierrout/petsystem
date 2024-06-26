<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Models\Entity\AddPet as EntityAddPet;

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

    /**
     * Método responsável por cadastrar um novo pet
     * @param Request $request
     * @return string
     */
    public static function insertPet($request){
        $postVars = $request->getPostVars();

        return self::getAddPet();
    }
    
}