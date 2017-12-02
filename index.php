<?php
	if(isset($_GET['resultado']) and $_GET['resultado'] == 1){
		echo "<p>SUCESSO NO CADASTRO</p>";
	}else{
		if( isset($_GET['erro']) ){
			echo $_GET['erro'];
		}
	}
?>
<form action="cadastro_pessoal.php" method="POST">
	<label>nome</label>
	<input type="text" name="nome" maxlength="10" value="<?php echo isset($_GET['nome'])? $_GET['nome'] : "";?>"/>
	<br/>
	<label>email</label>
	<input type="e-mail" name="email" value="<?php echo isset($_GET['email'])? $_GET['email'] : "";?>"/>
	<br/>
	<label>telefone</label>
	<input type="tel" name="telefone" value="<?php echo isset($_GET['telefone'])? $_GET['telefone'] : "";?>"/>
	<br/>
	<label>idade</label>
	<input type="number" name="idade" min="1" max="150" value="<?php echo isset($_GET['idade'])? $_GET['idade'] : "";?>"/>
	<br/>
	<label>sexo</label>
	<input type="radio" name="sexo" value="male" <?php echo ( isset($_GET['sexo']) and $_GET['sexo'] == "male") ? "checked" : "";?>><label>Masculino</label>
	<input type="radio" name="sexo" value="female" <?php echo ( isset($_GET['sexo']) and $_GET['sexo'] == "female") ? "checked" : "";?>><label>Feminino</label>
	<br/>
	<label>endereço</label>
	<textarea name="endereço"><?php echo isset($_GET['endereço'])? $_GET['endereço'] : "";?></textarea>
	<br/>
	<input type="submit"/>
</form>	