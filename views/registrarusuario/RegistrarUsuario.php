<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar Usuário</title>
        <link href="../../views/css/bootstrap-responsive.css" rel="stylesheet">  
        <link href="../../views/css/rodapefixo.css" rel="stylesheet">  
        <link href="../../views/css/bootstrap.min.css" rel="stylesheet">
        <script src="../../views/js/bootstrap.min.js"></script>
        <script src="../../views/js/jqBootstrapValidation.js"></script>
        <script src="../../views/js/AutenticacaoUsuario.js"></script>
        
        <script>
            $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
        </script>
        
         <style type="text/css">
            body{padding-top: 60px;padding-bottom: 40px;}.sidebar-nav{padding: 9px 0;}@media (max-width: 980px){/* Enable use of floated navbar text */ .navbar-text.pull-right{float: none;padding-left: 5px;padding-right: 5px;}}
        </style>
        
    </head>
    <body>
        <form name="FRegistrarUsuario" action="" method="post">
            <input type="hidden" name="acao" value=""/>  
            
            <!-- Definindo o corpo da tela -->
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <!-- Definindo o cabeçalhop da página -->
                        <img src="../../views/img/cabecalho_ecommerce.png"/> 
                    </div>
                </div>
            </div>
            <br/><br/>
            <!-- Definindo o conteudo da página -->            
             <div class="container-fluid">
                 <!-- Criando os campos do formulário -->
                 <legend>::.Registrar usuário no sistema - Informe os dados abaixo:</legend>
                 <label>Nome completo</label>
                 <input type="text" placeholder="Digite seu nome..." name="nomeCompleto" required>
                 <label>E-mail</label>
                 <input type="email" placeholder="Digite seu e-mail..." name="email" required>
                 <label>Telefone</label>
                 <input type="text" placeholder="Digite seu telefone..." name="telefone" required>
                 <label>Celular</label>
                 <input type="text" placeholder="Digite seu celular..." name="celular" required>
                 <label>Senha</label>
                 <input type="password" placeholder="Digite sua senha..." name="senha" required>
                 <label>Confirmar senha</label>
                 <input type="text" placeholder="Confirme a sua senha..." name="confirmarSenha" required>                 
                 <br/>
                 <button type="submit" class="btn btn-primary">Salvar</button>
                 &nbsp;&nbsp;
                 <button type="button" class="btn btn-primary" onclick="javascript:history.back(-1);">Voltar(Tela Anterior)</button>
                 <br/><br/>
                 <!-- Definindo o rodapé da página -->
                 <footer>
                    <img src="../../views/img/curves_01_1.png"/>
                 </footer>
             </div>  
             
        </form>
    </body>
</html>
