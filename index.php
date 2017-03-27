<?php
session_start();
require("lib/class/AcuPdo.class.php");
require("lib/smarty/Smarty.class.php");
require("lib/class/FluxRSS.class.php");
// On inclut la classe Smarty
$smarty = new Smarty();
// On inclut la classe fluxRSS
$fluxRSS = new FluxRSS();
// On initialise la connexion à la bdd
$pdo =  AcuPdo::getinstance();

// Si l'utilisateur se déconnecte, on supprime les données de session
if(isset($_GET['deconnect'])){
    unset($_SESSION['identifiant']);
}

// Si l'utilisateur se connecte, on vérifie ses identifiants
if(isset($_SESSION['identifiant'])){
    $identifiant = $_SESSION['identifiant'];
}else{
    $identifiant = "";
}

// Si l'utilisateur créé un compte, on vérifie que tous les champs sont remplis et on utilise la fonction de la classe PDO
if(isset($_POST['connection'])){
    if(isset($_POST['mail'])){
        if(isset($_POST['pwd'])){
            $auth = authentication($pdo);
            if($auth){
                $_SESSION['identifiant'] = $auth;
                $identifiant = $auth;
            }else{
                $messageErreur = "Le couple identifiant/mot de passe n'est pas valide";
            }
        }else{
            $messageErreur = "Vous n'avez pas renseigné votre mot de passe";
        }
    }else{
        $messageErreur = "Vous n'avez pas renseigné votre identifiant";
    }
}

//création du compte utilisateur dans la BDD
if(isset($_POST['inscription'])){
    if(isset($_POST['idperso'])){
        if(isset($_POST['email_addr'])){
            if(isset($_POST['password'])){
                if(accountcreate($pdo)){
                    $messageValidation = "Vous venez de créer un compte !";
                }else{
                    $messageErreur = "Ce compte existe déjà";
                }
            }else{
                $messageErreur = "Vous n'avez pas renseigné votre mot de passe";
            }
        }else{
            $messageErreur = "Vous n'avez pas renseigné votre adresse mail";
        }
    }else{
        $messageErreur = "Vous n'avez pas renseigné d'identifiant";
    }
}

$smarty->assign('identifiant', $identifiant);
$list_patho = null;
$template = "home.tpl";
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page){
        case 'home':
        $rss= $fluxRSS->getFluxrss();
        $smarty->assign('rss', $rss);
        break;

        case 'patho':
        $list_patho = $pdo->getpatho();
        //var_dump($list_patho);
        $type = $pdo->getListType();

        // On assigne les variables issues du flitrage
        if (isset($_POST['typeFilter'])){
            $typeSelected = $_POST['typeFilter'];
        }else{
            $typeSelected = 'Tous';
        }
        if (isset($_POST['meridienFilter'])){
            $meridienSelected = $_POST['meridienFilter'];
        }else{
            $meridienSelected = 'Tous';
        }
        if (isset($_POST['caracteristiqueFilter'])){
            $caracteristiqueSelected = $_POST['caracteristiqueFilter'];
        }else{
            $caracteristiqueSelected = 'Tous';
        }

        // On défini les tableaux des listes déroulantes
        if($typeSelected != 'Tous'){
            $meridien = array('Tous');
            $meridien = array_merge($meridien,array_keys($list_patho[$_POST['typeFilter']]));
        }else{
            $meridien = $pdo->getListMeridien();
        }
        if (isset($_POST['meridienFilter']) && !in_array($_POST['meridienFilter'], $meridien)){
            $meridienSelected = 'Tous';
        }
        if($typeSelected != 'Tous' && $meridienSelected != 'Tous'){
            $caracteristique = array('Tous');
            $caracteristique = array_merge($caracteristique,array_keys($list_patho[$_POST['typeFilter']][$_POST['meridienFilter']]));
        }else{
            $caracteristique = $pdo->getListCaracteristique();
        }
        if (isset($_POST['caracteristiqueFilter']) && !in_array($_POST['caracteristiqueFilter'], $caracteristique)){
            $caracteristiqueSelected = 'Tous';
        }

        $smarty->assign('typeListFilter', $type);
        $smarty->assign('meridienListFilter', $meridien);
        $smarty->assign('caracteristiqueListFilter', $caracteristique);

        $smarty->assign('typeSelected',$typeSelected);
        $smarty->assign('meridienSelected',$meridienSelected);
        $smarty->assign('caracteristiqueSelected', $caracteristiqueSelected);
        //$list_patho = $pdo->getAll();
        // fabriquer l'arborescence en même que création de Pathologie (1 par élément sauf si même Patho pour plusieurs symptome)
        // afficher arborescence
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

if (isset($messageErreur)) {
    $smarty->assign('messageErreur', $messageErreur);
    $smarty->display('erreur.tpl');
}
if (isset($messageValidation)) {
    $smarty->assign('messageValidation', $messageValidation);
    $smarty->display('validation.tpl');
}

$smarty->display($template);

$smarty->display('footer.tpl');

function authentication($pdo){
    $result = $pdo->getUser($_POST['mail'], $_POST['pwd']);
    return $result;
}

function accountcreate($pdo){
    $result = $pdo->createUser($_POST['idperso'], $_POST['email_addr'], $_POST['password']);
    return $result;
}
?>