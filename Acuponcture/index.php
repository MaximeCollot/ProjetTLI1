<?php

include 'Templates/header.tpl';
require("lib/class/AcuPdo.class.php");
require("lib/smarty/Smarty.class.php");

echo "<div id='content'></div>";

// On inclut la classe Smarty
$pdo =  AcuPdo::getinstance();
$smarty = new Smarty();
$page = "home.tpl";
if (isset($_GET['item'])) {
    $item = $_GET['item'];

    switch ($item){
        case 'home':
            break;

        case 'patho':
            $list_patho = $pdo->getpatho();
            var_dump($list_patho);
            $smarty->assign('list_patho', $list_patho);
            $page = "patho.tpl";
            //echo($list_patho);
            break;
        case 'info':
            $page = "info.tpl";
            break;
        case 'subscribe':
        	$page = 'subscribe.tpl';
        	break;
    }
}





$smarty->display($page);

include 'Templates/footer.tpl'
?>