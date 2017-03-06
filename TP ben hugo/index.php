<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=acu;charset=utf8', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

// On inclut la classe Smarty
require("lib/smarty/Smarty.class.php");
$smarty = new Smarty();
$page = "index.html";
if (isset($_GET['item'])) {
    $item = $_GET['item'];

    switch ($item){
        case 'home':
            break;

        case 'patho':
            $query = $bdd->prepare("SELECT `desc` FROM patho");
            $query->execute();
            $list_patho = $query->fetch();
            echo($list_patho->);
            $smarty->assign('list_patho', $list_patho);
            $page = "pathologies.tpl";
            //echo($list_patho);
            break;
        case 'info':
            $page = "infos.html";
            break;
    }
}





$smarty->display($page);

?> 
