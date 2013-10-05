<?php

require_once("../model/bean/Usuario.class.php"); // Classe Bean
require_once("../model/dao/UsuarioDAO.class.php"); // Classe DAO
require_once("../view/UsuarioView.class.php"); //Classe View

//Armazena na vari�vel $acao o que o sistema esta requisitando (cadastrar, autenticar, excluir, etc)
$acao = $_REQUEST["acao"];

//Baseado no que foi solicitado, chama na classe DAO o m�todo respons�vel por tal tarefa, e depois manda pra View a resposta, para ser exibida de alguma forma ao usu�rio
switch($acao){

	case 'autenticar':{
		
		// Se for autenticar, ent�o dever�o ser informados login e senha.
		
		//Primeiro instancia um objeto da classe Bean, para setar os valores informados no formul�rio
		$usuario = new Usuario();	
		
		/* Seta para a Bean os valores informados,pois ser�o validados na camada DAO, que 
		ir� verificar a consistencia dos dados em um Banco de Dados e depois retornar para a controller o resultado. */
		$usuario->setLogin($_REQUEST["login"]);
		$usuario->setSenha($_REQUEST["senha"]);
		
		/* Instancia um objeto da classe DAO e um da View, e passaremos para a View o que for retornado pela DAO */		
		$usuarioDAO = new UsuarioDAO();
		$usuarioView = new UsuarioView();
		
		//Passa para o m�todo de autentica��o da DAO um objeto da classe Usu�rio. Armazenaremos na vari�vel $resultado o que este m�todo retornar. 
		$resultado = $usuarioDAO->autenticaUsuario($usuario);
		
		//Chama um m�todo da View passando para o mesmo o que foi retornado pela DAO.
		$usuarioView->respostaAutenticacao($resultado);
		
	}
	break;
	
	case 'cadastrar':{

		$usuario = new Usuario();
		//Aqui vai fazer as valida��es necess�rias e requisita o m�todo da classe DAO respons�vel por cadastrar o usu�rio.
		$usuario->setNome($_REQUEST["nome"]); //atribui��o do campo "nome" vindo do formul�rio para variavel
		$usuario->setIdade($_REQUEST["idade"]);//atribui��o do campo "idade" vindo do formul�rio para variavel
		$usuario->setEmail($_REQUEST["email"]); //atribui��o do campo "email" vindo do formul�rio para variavel
		$usuario->setEndereco($_REQUEST["endereco"]); //atribui��o do campo "endereco" vindo do formul�rio para variavel
		$usuario->setCidade($_REQUEST["cidade"]); //atribui��o do campo "cidade" vindo do formul�rio para variavel
		$usuario->setEstado($_REQUEST["estado"]); //atribui��o do campo "estado" vindo do formul�rio para variavel
		$usuario->setLogin($_REQUEST["login"]); //atribui��o do campo "login" vindo do formul�rio para variavel
		$usuario->setSenha($_REQUEST["senha"]); //atribui��o do campo "senha" vindo do formul�rio para variavel

		$usuarioDAO = new UsuarioDAO();
		$usuarioView = new UsuarioView();

		$resultado = $usuarioDAO->cadastrarUsuario($usuario);
		$usuarioView->respostaCadastro($resultado);

	}
	break;

	case 'excluir':{
		//Aqui vai fazer as valida��es necess�rias e requisita o m�todo da classe DAO respons�vel por excluir o usu�rio.
	}
	
	default:
		return null;
		
}


?>