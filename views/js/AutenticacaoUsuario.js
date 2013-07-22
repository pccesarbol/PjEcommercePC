/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function exibirTelaRegistrarUsuario(form){
    form.action     = 'controler/AutenticarUsuarioCointroler.php';
    form.acao.value = 'EXIBIR_TELA_REGISTRAR_USUARIO';
    form.submit();
}

