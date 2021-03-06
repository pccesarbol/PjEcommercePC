<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="utf-8">
        <title>FREELANCER/DESENVOLVEDOR.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="views/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- or use local jquery -->
        
        <style type="text/css">
            body{padding-top: 60px;padding-bottom: 40px;}.sidebar-nav{padding: 9px 0;}@media (max-width: 980px){/* Enable use of floated navbar text */ .navbar-text.pull-right{float: none;padding-left: 5px;padding-right: 5px;}}
        </style>
        <link href="views/css/bootstrap-responsive.css" rel="stylesheet">        
        <script src="views/js/bootstrap.min.js"></script>
        <script src="views/js/jqBootstrapValidation.js"></script>
        <script src="views/js/AutenticacaoUsuario.js"></script>
        
        <script>
            $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
        </script>
        
    </head>
    
    <body>     
      <form name="Frm1" action="" method="post"> 
        <input type="hidden" name="acao" value=""/>  
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <!-- Definindo o cabeçalhop da página -->
                <img src="views/img/cabecalho_ecommerce.png"/>
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button><a class="brand" href="#">Área ADM</a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right"><a href="javascript:exibirTelaRegistrarUsuario(document.Frm1);" class="navbar-link"><b>Registra-se</b></a>
                        </p>
                        <ul class="nav">
                            <li><a href="#">Acompanhar seu pedido</a>                                
                            </li>
                            <li class="active"><a href="#">Ajuda on-line</a>
                            </li>
                            <li><a href="#about">Fale com o desenvolvedor</a>
                            </li>
                            <li><a href="#contact">Solicitar orçamento</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list"><br/><br/><br/><br/>
                            <li class="nav-header">Área do Cliente</li>
                            <li class="active">
                                <form class="form-horizontal" name="FrmClienteLogin">
                                    <div class="control-group">
                                      <label class="control-label" for="inputEmail">Email</label>
                                      <div class="controls">
                                        <input type="email" id="inputEmail" placeholder="Email" id="email" required >
                                      </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label" for="inputPassword">Senha</label>
                                      <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="Senha" required>
                                      </div>
                                      <button class="btn btn-block btn-primary" type="submit">Gerenciar Conta</button>
                                    </div>                                    
                                  </form>
                            </li>  
                        </ul>
                    </div>
                </div>
                <div class="span9">
                    <div class="hero-unit">
                        
                        <div class="row-fluid">
                        <div class="span4">
                            <h2>Heading</h2>
                            <p>Sistema de Cadastro.</p>                           
                            <p><a class="btn-primary" href="#">Detalhar &raquo;</a>
                            </p>
                        </div>
                        <div class="span4">
                            <h2>Heading</h2>
                            <p>Controle de Estoque.</p>                           
                            <p><a class="btn-primary" href="#">Detalhar &raquo;</a>
                            </p>
                        </div>
                        <div class="span4">
                            <h2>Heading</h2>
                            <p>Manutenção de Páginas WEB.</p>                           
                            <p><a class="btn-primary" href="#">Detalhar &raquo;</a>
                            </p>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span4">
                            <h2>Heading</h2>
                            <p>Manutenção de Sistemas Desktop.</p>                           
                            <p><a class="btn-primary" href="#">Detalhar &raquo;</a>
                            </p>
                        </div>
                        <div class="span4">
                            <h2>Heading</h2>
                            <p>Migração de Dados.</p>                           
                            <p><a class="btn-primary" href="#">Detalhar &raquo;</a>
                            </p>
                        </div>
                        <div class="span4">
                            <h2>Heading</h2>
                            <p>Mala Direta.</p>                           
                            <p><a class="btn-primary" href="#">Detalhar &raquo;</a>
                            </p>
                        </div>
                    </div>                       
                    </div>                    
                </div>
            </div>
            <footer>
                <!-- Definindo o RODAPÉ da página -->
                <img src="views/img/curves_01_1.png"/>
            </footer>
        </div>
        <!-- Le javascript==================================================-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/js/bootstrap.js"></script>        
     </form>   
    </body>
</html>