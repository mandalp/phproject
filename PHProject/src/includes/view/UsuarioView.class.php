<?php

class UsuarioView{

	function respostaAutenticacao($resposta){
	
		/*Se a vari�vel $resposta estiver neste momento como TRUE retorna uma string vazia. Caso contr�rio, 
		ir� cair no else, que ir� alertar que os dados s�o inv�lidos.*/
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