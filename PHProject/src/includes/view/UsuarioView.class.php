<?php

class UsuarioView{

	function respostaAutenticacao($resposta){
	
		/*Se a variável $resposta estiver neste momento como TRUE retorna uma string vazia. Caso contrário, 
		irá cair no else, que irá alertar que os dados são inválidos.*/
		if($resposta){
			echo "";
		}
		else{
			echo '<p class="red">Erro ao efetuar o login. Dados incorretos!</p>';
		}
	}

	function respostaCadastro($resposta){
		if($resposta){
			echo "<p class='blue'>Usuario Cadastrado com Sucesso!</p>";
		}
		else{
			echo '<p class="red">Erro ao efetuar o cadastro!</p>';
		}
	}

}

?>