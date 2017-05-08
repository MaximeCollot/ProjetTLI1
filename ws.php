<?php
require("lib/class/AcuPdo.class.php");

// On initialise la connexion à la bdd
$pdo =  AcuPdo::getinstance();

header('Content-type: application/json; charset=utf-8');

if (isset($_GET["keywordList"])){
	$keywordList = explode(',', $_GET["keywordList"]);
}
$result = $pdo->getPathoByKeywords($keywordList);
$json = array("status" => 1, "pathos" => $result);
echo json_encode($json, JSON_FORCE_OBJECT);
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