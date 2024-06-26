<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class About extends Page{

    /**
     * @return string
     */
    public static function getAbout(){
        //Organização
        $obOrganization = new Organization();

        // View da Home 
        $content = View::render('pages/about',[
            'name' => $obOrganization->name,
            'description' => $obOrganization->description,
        ]);

        // Retorna a view da página
        return parent::getPage('PetSystem - Sobre', $content);
    }
    
}