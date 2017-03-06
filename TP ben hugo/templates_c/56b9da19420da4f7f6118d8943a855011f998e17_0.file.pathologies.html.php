<?php
/* Smarty version 3.1.30, created on 2017-03-05 19:08:24
  from "C:\wamp64\www\pathologies.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bc62284c8b31_30973480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56b9da19420da4f7f6118d8943a855011f998e17' => 
    array (
      0 => 'C:\\wamp64\\www\\pathologies.html',
      1 => 1488740901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bc62284c8b31_30973480 (Smarty_Internal_Template $_smarty_tpl) {
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



  <h1>Pathologies</h1>
  <p>Ici se situera la liste des pathologies</p>

  <footer>
    Copyright TALBOT-NARDIN 2017
  </footer>

</body>



</html><?php }
}
