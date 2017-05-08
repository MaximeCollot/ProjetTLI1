<?php

require("../lib/class/WebService.class.php");
if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
$_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
}

try {
$ws = new WebService($_REQUEST['request']);
echo $ws->processAPI();
} catch (Exception $e) {
echo json_encode(Array('error' => $e->getMessage()));
}

?>