<?php

namespace App\Model\Entity;

class Pets{

    /**
     * ID do Depoimento
     * @var integer
     */
    public $id;

    /**
     * Nome do Pet
     * @var string
     */
    public $nome;

    /**
     * Especie do Pet
     * @var string
     */
    public $especie;

    /**
     * Data de publicação
     * @var string
     */
    public $data;

    /**
     * Método responsável por cadastrar a instância atual no banco de dados
     * @var boolean
     */
    public function cadastrar() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}