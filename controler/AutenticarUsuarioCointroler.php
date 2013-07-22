<?php

/*
 * Controlar os registros dos usuários
 * Autor: Paulo Augusto
 * Data: 21/07/2013 as 20hs.
 */

$acao = $_POST['acao'];

/**
 * Definindo os redirecionamentos
 * Autor: Paulo Augusto
 * Data: 21/07/2013 as 20hs04min  
 * **/
$FORWARD_EXIBIR_TELA_REGISTRAR_USUARIO = '../views/registrarusuario/RegistrarUsuario.php';

/**
 * Exibindo a tela de registro de usuários no sistema
 * Autor: Paulo Augusto
 * Data: 20/07/2013 as 20hs01min
 * **/
if($acao == 'EXIBIR_TELA_REGISTRAR_USUARIO'){
    header( 'Location: '.$FORWARD_EXIBIR_TELA_REGISTRAR_USUARIO.'' ) ;
}


?>
