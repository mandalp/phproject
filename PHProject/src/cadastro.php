<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<head>

<title> A.Library - Cadastro </title>

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
<form name="frm_cadastro" action="" method="post" >
  <input type="hidden" name="acao" value="cadastrar" />
  <fieldset class="fild">
    <legend class="legend">Cadastro de Usuario</legend>
    
      <table width="625" border="0">
       <tr>
          <td width="69">Nome:</td>
          <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
            <span class="style1">*</span></td>
        </tr>
      <tr>
          <td>Idade:</td>
          <td><input name="idade" type="text" id="idade" maxlength="20" />
            <span class="style1">*</span></td>
      </tr>
      <tr>
          <td>Email:</td>
          <td><input name="email" type="text" id="email" size="70" maxlength="60" />
            <span class="style1">*</span></td>
      </tr>
      <tr>
          <td>Endereço:</td>
          <td><input name="endereco" type="text" id="endereco" size="70" maxlength="70" />
            <span class="style1">*</span></td>
      </tr>
      <tr>
          <td>Cidade:</td>
          <td><input name="cidade" type="text" id="cidade" maxlength="20" />
           <span class="style1">*</span></td>
      </tr>
      <tr>
          <td>Estado:</td>
          <td><select name="estado" id="estado">
            <option>Selecione...</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="ES">ES</option>
            <option value="DF">DF</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
              </select>
            <span class="style1">*      </span></td>
        </tr>
        <tr>
          <td>Login:</td>
          <td><input name="login" type="text" id="login" maxlength="12" />
            <span class="style1">*</span></td>
        </tr>
        <tr>
          <td>Senha:</td>
          <td><input name="senha" type="password" id="senha" maxlength="12" />
              <span class="style1">*</span></td>
        </tr>
        <tr>
  </fieldset>
       <td colspan="2"><input name="news" type="checkbox" id="news" value="ATIVO" checked="checked" />Desejo receber novidades e informações sobre o conteúdo deste site. </td>
    </tr>
    <tr>
      <td colspan="2"><p>
        <span class="style1">* Campos com * são obrigatórios!</span></p>
        <input name="btn_cadastro" type="submit" id="cadastrar" value="Concluir meu Cadastro" /> 
        <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos" />
        <input name="voltar" type="submit" href = "/login.php" value="Voltar"/> 
      <p> </p></td>
    </tr>
  </table>
</form>
</div>



<div class="rodape" >

<p>© Copyright desde 2013 Amandas, todos os direitos reservados </p>

</div>


</body>
</html>
