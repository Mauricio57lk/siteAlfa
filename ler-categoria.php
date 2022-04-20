<?php
	header("Location: index.php");

	$categoria = $_POST['categoriaSelect'];
	
	// echo("cor escolhida: ".$cor);

	setcookie('categCookie',$categoria, time()+3600);//1 hora
	//setcookie([nome],[conteúdo],[duração]);
	// setcookie('corCookie',$cor, time()+(60*60*24*10));
	/*
		60 - 1 minuto
		*60 - 1 hora
		*24 - 1 dia
		*10 - 10 dias
	*/
?>