<?php
	echo "ola,mundo";/* echo para iniciar comentário */
	$php="7.2"; /* Declaração de variáveis (atribui valor para a variável)*/
	/*echo "<p>";
	echo $php;
	echo "</p>"; (Uma forma de fazer o echo)*/ 
	echo "<p>", $php , "</p>";  /*imprimindo series*/
	/* echo "<p>".$php."</p>" (Concatenando)*/
	
	
	/* concatenar processo mais eficiente*/ 
	
	$item1="leite";
	$item2="pão";
	$item3="sapão";
	$item4="banana";
	$item5="macarrão";
	
?>
	<ul>
		<li><?php echo $item1;?></li>
		<li><?php echo $item2;?></li>
		<li><?php echo $item3;?></li>
		<li><?php echo $item4;?></li>	
		<li><?php echo $item5;?></li>		
		
	</ul>		
	
<?php	

	/* concatenar  
	
	$item1="leite";
	$item2="pão";
	$item3="sapão";
	$item4="banana";
	$item5="macarrão";
	
	echo "<ul>";
	echo "<li>".$item1."</li>";
	echo "<li>".$item2."</li>";
	echo "<li>".$item3."</li>";
	echo "<li>".$item4."</li>";
	echo "<li>".$item5."</li>";
	echo "</ul>"; */
	
	/* Criando listas, para todos inserir echo para imprimir (deixar um espaço entre comandos) */
	
	echo "<ul>";
	echo "<li>leite</li>";	
	echo "<li>pão</li>";
	echo "<li>sapão</li>";
	echo "<li>banana</li>";
	echo "<li>macarrão</li>";
	echo "</ul>"; 

?>