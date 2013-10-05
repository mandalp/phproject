<?php

class Usuario{

	var $id;
	var $nome;
	var $email;
	var $login;
	var $senha;
	var $idade;
	var $endereco;
	var $cidade;
	var $estado;
	var $imagem;

	//Id
	public function getId(){
		return $this -> id;
	}
	public function setId($valor){
		$this -> id = $valor;	
	}
	
	//Nome
	public function getNome(){
		return $this -> nome;
	}
	public function setNome($valor){
		$this -> nome = $valor;	
	}
	
	//Email
	public function getEmail(){
		return $this -> email;
	}
	public function setEmail($valor){
		$this -> email = $valor;	
	}
	
	//Login
	public function getLogin(){
		return $this -> login;
	}
	public function setLogin($valor){
		$this -> login = $valor;	
	}
		
	//Senha
	public function getSenha(){
		return $this -> senha;
	}
	public function setSenha($valor){
		$this -> senha = $valor;	
	}

	//Idade
	public function getIdade()
	{
	    return $this->idade;
	}
	public function setIdade($idade)
	{
	    return $this->idade = $idade;
	}

	//Endereco
	public function getEndereco()
	{
	    return $this->endereco;
	}
	public function setEndereco($endereco)
	{
	    return $this->endereco = $endereco;
	}

	//Cidade
	public function getCidade()
	{
	    return $this->cidade;
	}
	public function setCidade($cidade)
	{
	    return $this->cidade = $cidade;
	}

	//Estado
	public function getEstado()
	{
	    return $this->estado;
	} 
	public function setEstado($estado)
	{
	    return $this->estado = $estado;
	}

}

?>