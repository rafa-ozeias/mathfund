<?php

$servername="localhost";
$username="root";
$password="";
$dbname="questoes";



try{
	
	$conn= new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	
}
catch (PDOException $erro)
{
	
	header("Ocorreu o seguinte erro: ".$erro->getMessage());
}

?>