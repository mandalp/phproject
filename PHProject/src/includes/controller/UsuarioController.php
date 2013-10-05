<?php

require_once("../model/bean/Usuario.class.php"); // Classe Bean
require_once("../model/dao/UsuarioDAO.class.php"); // Classe DAO
require_once("../view/UsuarioView.class.php"); //Classe View

//Armazena na variável $acao o que o sistema esta requisitando (cadastrar, autenticar, excluir, etc)
$acao = $_REQUEST["acao"];

//Baseado no que foi solicitado, chama na classe DAO o método responsável por tal tarefa, e depois manda pra View a resposta, para ser exibida de alguma forma ao usuário
switch($acao){

	case 'autenticar':{
		
		// Se for autenticar, então deverão ser informados login e senha.
		
		//Primeiro instancia um objeto da classe Bean, para setar os valores informados no formulário
		$usuario = new Usuario();	
		
		/* Seta para a Bean os valores informados,pois serão validados na camada DAO, que 
		irá verificar a consistencia dos dados em um Banco de Dados e depois retornar para a controller o resultado. */
		$usuario->setLogin($_REQUEST["login"]);
		$usuario->setSenha($_REQUEST["senha"]);
		
		/* Instancia um objeto da classe DAO e um da View, e passaremos para a View o que for retornado pela DAO */		
		$usuarioDAO = new UsuarioDAO();
		$usuarioView = new UsuarioView();
		
		//Passa para o método de autenticação da DAO um objeto da classe Usuário. Armazenaremos na variável $resultado o que este método retornar. 
		$resultado = $usuarioDAO->autenticaUsuario($usuario);
		
		//Chama um método da View passando para o mesmo o que foi retornado pela DAO.
		$usuarioView->respostaAutenticacao($resultado);
		
	}
	break;
	
	case 'cadastrar':{

		$usuario = new Usuario();
		//Aqui vai fazer as validações necessárias e requisita o método da classe DAO responsável por cadastrar o usuário.
		$usuario->setNome($_REQUEST["nome"]); //atribuição do campo "nome" vindo do formulário para variavel
		$usuario->setIdade($_REQUEST["idade"]);//atribuição do campo "idade" vindo do formulário para variavel
		$usuario->setEmail($_REQUEST["email"]); //atribuição do campo "email" vindo do formulário para variavel
		$usuario->setEndereco($_REQUEST["endereco"]); //atribuição do campo "endereco" vindo do formulário para variavel
		$usuario->setCidade($_REQUEST["cidade"]); //atribuição do campo "cidade" vindo do formulário para variavel
		$usuario->setEstado($_REQUEST["estado"]); //atribuição do campo "estado" vindo do formulário para variavel
		$usuario->setLogin($_REQUEST["login"]); //atribuição do campo "login" vindo do formulário para variavel
		$usuario->setSenha($_REQUEST["senha"]); //atribuição do campo "senha" vindo do formulário para variavel

		$usuarioDAO = new UsuarioDAO();
		$usuarioView = new UsuarioView();

		$resultado = $usuarioDAO->cadastrarUsuario($usuario);
		$usuarioView->respostaCadastro($resultado);

	}
	break;

	case 'excluir':{
		//Aqui vai fazer as validações necessárias e requisita o método da classe DAO responsável por excluir o usuário.
	}
	
	default:
		return null;
		
}


?>