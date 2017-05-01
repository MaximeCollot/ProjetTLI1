<?php
require("lib/class/AcuPdo.class.php");

// On initialise la connexion à la bdd
$pdo =  AcuPdo::getinstance();

header('Content-type: application/json; charset=utf-8');

if (isset($_GET["keywordList"])){
	$keywordList = explode(',', $_GET["keywordList"]);
}
var_dump($keywordList);
// $result = $pdo->getKeywords();
// $json = array("status" => 1, "info" => $result);
// echo json_encode($json);
/*foreach ($result as $value) {
	echo $value;
	echo "/";
}*/
// 	}
// }

// try
// {
//   $server = new SoapServer(null, array('uri' => 'http://localhost/ws.php'));

//   $server->setClass("ws");
//   $server->handle();
// }
// catch(Exception $e)
// {
//   echo "Exception: " . $e;
// }


?>