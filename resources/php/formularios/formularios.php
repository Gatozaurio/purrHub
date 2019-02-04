<?php
header('Content-Type: application/json');

sleep(2);

$errores = [];
if(isset($_POST["email"])){
	$email = $_POST["email"];
	$errores["email"] = [];

	if( strlen($email) < 4 ){
		$errores["email"]["min"] = "El email debe tener 4 caracteres como minimo.";
	}
}

echo json_encode($errores);
