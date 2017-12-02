<?php
	$nome=isset($_POST["nome"])? $_POST["nome"]:null;
	$email=isset($_POST["email"])? $_POST["email"]:null;
	$telefone=isset($_POST["telefone"])? $_POST["telefone"]:null;
	$idade=isset($_POST["idade"])? $_POST["idade"]:null;
	$sexo=isset($_POST["sexo"])? $_POST["sexo"]:null;
	$endereço=isset($_POST["endereço"])? $_POST["endereço"]:null;
	
	if($nome != null){
		echo $nome, "<br/>";
		
		if($email != null){
			echo $email, "<br/>";
			
			if($telefone != null){
				echo $telefone, "<br/>";
		
				if($idade != null){
					echo $idade, "<br/>";
				
					if($sexo != null){
						echo $sexo, "<br/>";
							
						if($endereço != null){
							echo $endereço, "<br/>";
						} else {
							$erro = "Informe o endereço";
						}					
					} else {
						$erro = "Informe o sexo";
					}
				} else {
					$erro = "Informe a idade";
				}				
			} else {
				$erro = "Informe o telefone";
			}
		} else {
			$erro = "Informe o email";
		}	
	} else {
		$erro = "Informe o nome";
	}
	
	if(empty($erro)){
		header("location: index.php?resultado=1&nome=$nome&email=$email&telefone=$telefone&idade=$idade&endereço=$endereço&sexo=$sexo");	
	}else{
		header("location: index.php?resultado=0&erro=$erro&nome=$nome&email=$email&telefone=$telefone&idade=$idade&endereço=$endereço&sexo=$sexo");
	}
	
						
?>		