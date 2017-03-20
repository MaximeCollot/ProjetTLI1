<?php
/* Smarty version 3.1.30, created on 2017-03-07 15:29:02
  from "/Applications/MAMP/htdocs/ProjetTLI1/Acuponcture/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bec3ae21cdb7_05301534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58c1a633b07523cdd5e4975d235c69ed702ec8c9' => 
    array (
      0 => '/Applications/MAMP/htdocs/ProjetTLI1/Acuponcture/templates/header.tpl',
      1 => 1488896610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bec3ae21cdb7_05301534 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html >
<html lang="fr">
	<head>
		<title>Acupuncture</title>
		<meta charset="utf-8">      
	    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen and (min-width: 641px)" />
	    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="screen and (min-width: 641px)">
	    <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="mobile  and (max-width: 640px)" />
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	    <?php echo '<script'; ?>
 type='text/javascript' src='scripts/header.js'><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 type='text/javascript' src='scripts/subscribe.js'><?php echo '</script'; ?>
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
&deconnect=true" class="header-button-right" tabindex="5" accesskey="d">Déonnexion</a>
	            	<?php }?>
		</nav>    
		<div id="connectBar" hidden aria-hidden=true>
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
