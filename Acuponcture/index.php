<?php
session_start();
require("lib/class/AcuPdo.class.php");
require("lib/smarty/Smarty.class.php");
// On inclut la classe Smarty
$smarty = new Smarty();
// On initialise la connexion à la bdd
$pdo =  AcuPdo::getinstance();

// Si l'utilisateur se connecte, on vérifie ses identifiants
if(isset($_SESSION['mail'])){
    $mail = $_SESSION['mail'];
}else{
    $mail = "";
}

if(isset($_POST['mail'])){
    if(isset($_POST['password'])){
        if(authentication($pdo)){
            $_SESSION['mail'] = $_POST['mail'];
            $mail = $_POST['mail'];
            echo "authentication";
            echo $mail;
        }
    }else{
        // alert mot de passe vide
    }
}


$smarty->assign('mail', $mail);

$template = "home.tpl";
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page){
        case 'home':
            break;

        case 'patho':
            $list_patho = $pdo->getpatho();
            $smarty->assign('list_patho', $list_patho);
            $template = "patho.tpl";
            break;
        case 'subscribe':
        	$template = 'subscribe.tpl';
        	break;
        case 'info':
            $template = "info.tpl";
            break;
        case 'contact':
            $template = "contact.tpl";
            break;

    }
}else{
    $page = "home";
}

$smarty->assign('page', $page);

$smarty->display('header.tpl');
$smarty->display($template);

include 'Templates/footer.tpl';



function authentication($pdo){
    $result = $pdo->getUser($_POST['mail'], $_POST['password']);
    return $result;
}
?>