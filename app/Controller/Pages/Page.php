<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{
    /**
     * Método responsável por renderizar a sidebar da página
     * @return string
     */
    private static function getSidebar()
    {
        return View::render('pages/sidebar');
    }

    /**
     * Método responsável por renderizar o topo da página
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }

    /**
     * Método responsável por renderizar o rodapé da página
     * @return string
     */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }

    /**
     * Método responsável por retornar o conteúdo (view) da página genérica
     * @return string
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title' => $title,
            'sidebar' => self::getSidebar(),
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter(),
        ]);
    }
}
