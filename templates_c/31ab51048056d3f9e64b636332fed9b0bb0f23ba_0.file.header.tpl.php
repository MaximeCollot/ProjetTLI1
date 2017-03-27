<?php
/* Smarty version 3.1.30, created on 2017-03-27 00:28:41
  from "C:\Users\Maxime\Documents\ProjetTLI\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d85cb9d21fa8_27016792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ab51048056d3f9e64b636332fed9b0bb0f23ba' => 
    array (
      0 => 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\templates\\header.tpl',
      1 => 1490574516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d85cb9d21fa8_27016792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html >
<html lang="fr">
<head>
	<title>Acupuncture</title>
	<meta charset="utf-8">      
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen and (min-width: 641px)" />
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width: 640px)" />

	<?php echo '<script'; ?>
 type='text/javascript' src='scripts/header.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src='scripts/pathologies.js'><?php echo '</script'; ?>
>
</head>
<body>
	<header>
		<nav class="headerNav">
			<a href="index.php?page=home" class="header-button-left currentPage" tabindex="1" accesskey="w">Accueil</a>
			<a href="index.php?page=patho" class="header-button-left" tabindex="10" accesskey="s">Symptomes</a>
			<?php if ($_smarty_tpl->tpl_vars['identifiant']->value == '') {?>
			<a href="#" onclick="showConnect()" class="header-button-right" tabindex="2" accesskey="c">Connexion</a>
			<a href="index.php?page=subscribe" class="header-button-right" tabindex="3" accesskey="i">Inscription</a>
			<?php } else { ?>
			<div id="identifiant"><?php echo $_smarty_tpl->tpl_vars['identifiant']->value;?>
</div>
			<a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&deconnect=true" class="header-button-right" tabindex="5" accesskey="d">Déconnexion</a>
			<?php }?>
		</nav>    
		<div id="connectBar" hidden>
			<form action="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" method="post">
				<label for="mail">
					Mail :
				</label>
				<input type="email" name="mail" id="mail" required>
				<label for="pwd">
					Mot de passe :
				</label>
				<input type="password" name="pwd" id="pwd" required>
				<button type="submit" name="connection" class="">Valider</button>
			</form>
		</div>  
	</header>

	<div id='content'><?php }
}
