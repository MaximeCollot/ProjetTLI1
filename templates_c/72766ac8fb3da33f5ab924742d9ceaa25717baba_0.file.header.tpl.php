<?php
/* Smarty version 3.1.30, created on 2017-03-20 13:40:14
  from "/Applications/MAMP/htdocs/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cfcdae0cb774_18619753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72766ac8fb3da33f5ab924742d9ceaa25717baba' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/header.tpl',
      1 => 1488902409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cfcdae0cb774_18619753 (Smarty_Internal_Template $_smarty_tpl) {
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
				<label for="password">
					Mot de passe :
				</label>
				<input type="password" name="password" id="password" required>
				<button type="submit" name="connection" class="">Valider</button>
			</form>
		</div>  
	</header>

	<div id='content'><?php }
}
