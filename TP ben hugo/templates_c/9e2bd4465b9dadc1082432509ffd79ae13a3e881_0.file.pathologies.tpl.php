<?php
/* Smarty version 3.1.30, created on 2017-03-06 09:21:43
  from "C:\wamp64\www\pathologies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bd2a2799f4a3_68715083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2bd4465b9dadc1082432509ffd79ae13a3e881' => 
    array (
      0 => 'C:\\wamp64\\www\\pathologies.tpl',
      1 => 1488792102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bd2a2799f4a3_68715083 (Smarty_Internal_Template $_smarty_tpl) {
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

<table>

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

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_patho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
    <strong><?php echo $_smarty_tpl->tpl_vars['patho']->value;?>
</strong><br />

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <footer>
    Copyright TALBOT-NARDIN 2017
  </footer>

</body>



</html><?php }
}
