<?php
/* Smarty version 3.1.30, created on 2017-03-06 10:02:58
  from "C:\Users\Maxime\Documents\ProjetTLI\TP ben hugo\pathologies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bd33d2e019c1_42292861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95d82651800145b908eab3f53ebc4ed0080b4926' => 
    array (
      0 => 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\TP ben hugo\\pathologies.tpl',
      1 => 1488793347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bd33d2e019c1_42292861 (Smarty_Internal_Template $_smarty_tpl) {
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
