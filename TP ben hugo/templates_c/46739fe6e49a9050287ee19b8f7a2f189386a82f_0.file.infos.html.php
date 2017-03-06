<?php
/* Smarty version 3.1.30, created on 2017-03-05 19:08:04
  from "C:\wamp64\www\infos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bc6214279c11_16880245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46739fe6e49a9050287ee19b8f7a2f189386a82f' => 
    array (
      0 => 'C:\\wamp64\\www\\infos.html',
      1 => 1488740864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bc6214279c11_16880245 (Smarty_Internal_Template $_smarty_tpl) {
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
    <input type="text" title="login" placeholder="Login" required>
    <label for="password">Mot de passe&nbsp;:</label>
    <input type="password" title="password" placeholder="Mot de passe" required>
    <input type="submit" value="Submit">
  </form> 

  <a href="createaccount.html" tabindex="3">Créer un compte</a>

  <h1>Informations</h1>
  <p>Ici se situera les informations sur la réalisation du site</p>

  <footer>
    Copyright TALBOT-NARDIN 2017
  </footer>

</body>



</html><?php }
}
