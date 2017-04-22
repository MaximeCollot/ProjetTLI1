<?php
require("lib/class/AcuPdo.class.php");

// On initialise la connexion à la bdd
$pdo =  AcuPdo::getinstance();

// Class ws
// {
	// function Keywords (){
$result = $pdo->getKeywords();
foreach ($result as $value) {
	echo $value['name'];
	echo "/";
}
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