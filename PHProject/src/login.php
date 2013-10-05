<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>

<title> A.Library - Login </title>

<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" /> 

<!-- Linkando a biblioteca javascript jQuery -->
<script type="text/javascript" src="js/lib/jquery-1.4.2.js"></script>

<!-- Linkando o arquivo que terá as funções javascript - functions.js -->
<script type="text/javascript" src="js/functions.js"></script>
</head>

<body>
<div class="cabecalho" >

          <div class="logo" >             
                <img src="img/logo.png" width="243" height="110">                           
          </div>               
                
          <div class="banner" >
                <img src="img/banner.jpg" width="737" height="110">
          </div>
               
</div>

<div class="conteudo" >
      <form name="frm_Login" action="" method="post">
      <input type="hidden" name="acao" value="autenticar" />
        <div class="login">
          
          <div class = "linha1">
            Efetuar Login
          </div> 

          <div class="linha2">
            <div class="col1">
              Login 
            </div>
            <div class="col2">
              <input type="text" name="login" id="login"/>
            </div>
          </div>

          <div class="linha3">
            <div class="col1">
              Senha 
            </div>
            <div class="col2">
              <input type="password" name="senha" id="senha"/>
            </div>
          </div>

          <div class="linha4">
            <input type="submit" name="btn_login" id="btn_login" value="Entrar"/>
          </div>

          <div class="linha5">
             <a href="cadastro.php">Cadastre-se</a>
          </div>
        </div>
      </form>
    <div id="resultado"></div>
</div>


<div class="rodape" >

<p>© Copyright desde 2013 Amandas, todos os direitos reservados </p>

</div>


</body>
</html>
