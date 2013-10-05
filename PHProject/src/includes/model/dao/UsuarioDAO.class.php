<?php

//Como vai ser usado o que foi setado para a classe Bean, é necessário importar a classe Bean aqui.
require_once("../model/bean/Usuario.class.php");

class UsuarioDAO{


	function autenticaUsuario($usuario){

		$host = 'localhost';
		$usuario_db = 'phproject';
		$senha_db = '123';
		$banco = 'phproject';
	
		$conn = mysql_connect($host, $usuario_db, $senha_db) or die("Impossivel conectar");

		if($conn)
		{
			mysql_select_db($banco, $conn);
		}
//Comando que efetua a busca do banco
	$sql = "SELECT id, nome, email FROM cadastro_usuario WHERE login ='".$usuario->getLogin()."' AND senha = '".$usuario->getSenha()."'";
		//Executas o comando
		$rs = mysql_query($sql, $conn) or die(mysql_error());
		//Retorna o numero de linhas afetadas
		$num = mysql_num_rows($rs);
		//Verifica se alguma linha foi afetada, caso sim retornamos suas informações
		if($num > 0)
		{
			//Retorna os dados do banco
			$rst = mysql_fetch_array($rs);
				$id 	= $rst["id"];
				$nome 	= $rst["nome"];
				$email  = $rst["email"];

			//Inicia a sessão
			session_start();
			//Registra os dados do usuário na sessão
			$_SESSION["id"]		= $id;
			$_SESSION["nome"]	= $nome;
			$_SESSION["login"]	= $usuario->getLogin();
			$_SESSION["email"]  = $email;
			 
			//Encerra a conexão com o banco
						mysql_close($conn);		
						return true;
		}
		else{
			//Encerra a conexão com o banco
				mysql_close($conn);
				return false;
		}
	}

	function cadastrarUsuario($usuario){

		$host = 'localhost';
		$usuario_db = 'phproject';
		$senha_db = '123';
		$banco = 'phproject';
	
		$conn = mysql_connect($host, $usuario_db, $senha_db) or die("Impossivel conectar");
		
		if($conn)
		{
			mysql_select_db($banco, $conn);
		}

		$sql = "INSERT INTO cadastro_usuario VALUES ('".$usuario->getNome()."','".$usuario->getIdade()."','".$usuario->getEndereco()."', '".$usuario->getCidade()."', '".$usuario->getEstado()."','".$usuario->getLogin()."', '".$usuario->getSenha()."', '".$usuario->getEmail()."', '')";
		$rs = mysql_query($sql, $conn) or die(mysql_error());

		//Encerra a conexão com o banco
				mysql_close($conn);
				return true;
	}

}

?>