<?php


header("Content-Type: application/json");
include("Filho.php");


$pessoa = new Pessoa(1.34, 26, 85);


//echo $pessoa . "<br />";

$filho = new Filho(1.34, 28, 99);
$filho->setTimeDoCoracao("Galo");
/*echo $filho->getTimeDoCoracao() . "<br />";

echo $filho;*/

/*if($filho->getTimeDoCoracao() == "Galo"){
	
	http_response_code(200);
	echo json_encode($filho);

} else {
	http_response_code(404);
	$resposta = array("cafetao" => "Deu erro porra");
	echo json_encode($resposta);
}
*/
echo $filho->findAll();

?>