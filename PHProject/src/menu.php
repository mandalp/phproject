<?

      session_start();
       
       //Verifica se há dados ativos na sessão
        if(empty($_SESSION["id"]) || empty($_SESSION["nome"]) || empty($_SESSION["login"]))
        {
          //Caso não exista dados registrados, exige login
          header("Location:login.php");
        //caso contrario mostra o menu
       }else{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>

<title> A.Library - Menu</title>

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
               
                  
          <div class='menu'>
              <ul>
                 <li class='active '><a href='#'><span>Home</span></a></li>
                 <li><a href='#'><span>Livros</span></a></li>
                 <li><a href='#'><span>Perfil</span></a></li>
                 <li><a href='destroy.php'><span>Sair</span></a></li>
              </ul>
          </div>
</div>

<div class="conteudo" >
</div>


<div class="rodape" >

<p>© Copyright desde 2013 Amandas, todos os direitos reservados </p>

</div>


</body>
</html>

<?}?>
