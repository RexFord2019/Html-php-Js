<?php
	try{
		$conexao = new PDO('mysql:host=localhost;dbname=on2bui61_genesis', 'root', 'Brasil@canada');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
?>