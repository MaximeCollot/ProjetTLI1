<?php
/* Smarty version 3.1.30, created on 2017-03-05 18:56:37
  from "C:\wamp64\www\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bc5f65b36ea9_51494514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2c509e9e9185d91b7361a9ec2963faed1cdf4df' => 
    array (
      0 => 'C:\\wamp64\\www\\index.html',
      1 => 1488739726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bc5f65b36ea9_51494514 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr"> 

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="desktop.css" media="screen and (min-width: 641px)">
  <link rel="stylesheet" href="print.css" media="print" />
  <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 640px)">
  <title>Pathologies acupuncture</title>
</head>

<body>

  <header>

    <nav>

      <a href="index.php?item=home" tabindex="1">Accueil</a>
      <a href="index.php?item=patho" tabindex="2" accesskey="2">Pathologies</a>
      <a href="index.php?item=info" tabindex="3">Informations</a>

    </nav>
  </header>

  
  <form action="login.php">
    <label for="login">Login&nbsp;:</label>
    <input type="text" id="login" title="login" placeholder="Login" required>
    <label for="password">Mot de passe&nbsp;:</label>
    <input type="password" id="password" title="password" placeholder="Mot de passe" required>
    <input type="submit" value="Se connecter">
  </form> 

  <a id="create-account" href="createaccount.html" tabindex="3">Créer un compte</a>

  <div id = "flux">
    <h1 id="flux-titre">Flux RSS</h1>
    <p>Ici se situera plus tard un flux rss</p>
  </div>

  <div id="description" class="mw-content-ltr" lang="fr" dir="ltr">
    <h1>Bienvenu(e)!</h1>
    <p>Les acupuncteurs du dimanche vous souhaitent la bienvenue sur leur site. Vous pourrez consulter ici les différentes pathologies liées au déséquilibre de vos méridiens et les symptomes associés.
    </p>
    <p></p>

    <h2>Pour commencer, qu'est-ce que l'acupuncture ?</h2>

    <p>L'acupuncture est l'une des cinq branches de la Médecine traditionnelle chinoise. Elle se base sur une approche énergétique et holistique. Selon la pensée médicale orientale, elle agit sur le Qi (prononcer tchi) qui circule dans le corps par la voie des méridiens. Des aiguilles insérées à la surface de la peau stimulent des points d’acupuncture précis afin de régulariser le Qi ainsi que des fonctions physiologiques, organiques et psychiques ciblées. En termes occidentaux, on pourrait dire que cela permet de renforcer les processus d’autorégulation et de guérison.</p>

    <img id="acupuncture-home-img" src="img/acupuncture.png" alt="illustration acupuncture">
  </div>

  <footer>
    Copyright TALBOT-NARDIN 2017
  </footer>

</body>



</html><?php }
}
