<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 * Esta classe tem como objetivo gerenciar os atributos dos usuários
 * @author Paulo
 */
class Usuario {
    /**
     * Definindo os atributos da classe
     * **/
    public $idUsuario;
    public $nomeUsuario;
    public $senha;
    public $dataCadastro;
    public $email;
    public $perfil;
    public $telefone;
    public $celular;
    
    /**
     * Definindo o construtor da classe
     * **/
    public function __construct() {
        
    }
    
    /**
     * Definindo o destrutor da classe
     * **/
    public function __destruct() {
        
    }
    
}

?>
