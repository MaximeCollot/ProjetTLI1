<?php

include 'Templates/header.tpl';

echo "<div id='content'></div>";

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=acu;charset=utf8', 'root', '1604');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

// On inclut la classe Smarty
require("lib/smarty/Smarty.class.php");
$smarty = new Smarty();
$page = "home.tpl";
if (isset($_GET['item'])) {
    $item = $_GET['item'];

    switch ($item){
        case 'home':
            break;

        case 'patho':
            $query = $bdd->prepare("SELECT `desc` FROM patho");
            $query->execute();
            $list_patho = $query->fetch();
            //var_dump($list_patho);
            $smarty->assign('list_patho', $list_patho);
            $page = "patho.tpl";
            //echo($list_patho);
            break;
        case 'subscribe':
        	$page = 'subscribe.tpl';
        	break;
        case 'info':
            $page = "info.tpl";
            break;
        case 'contact':
            $page = "contact.tpl";
            break;

    }
}





$smarty->display($page);

include 'Templates/footer.tpl'
?>