<?php
/* Smarty version 3.1.30, created on 2017-03-06 10:18:24
  from "C:\Users\Maxime\Documents\ProjetTLI\Acuponcture\templates\subscribe.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bd3770e731a7_17556136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fdf689be52b99ad2e8326207d261b6166b90e9d' => 
    array (
      0 => 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\Acuponcture\\templates\\subscribe.tpl',
      1 => 1488795417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bd3770e731a7_17556136 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Inscription</h1>
		<form class="w3-container w3-card-4 w3-padding-16 w3-white" method="post" action="lib/main.php?variable=truc" id="formulaire">
			<ul>
				<div class="input-group">
					<label class="label-suscribe" for="idperso">Identifiant&nbsp;:</label>
					<input  class="input-subscripe" type="text" id="idperso" name="idperso" tabindex="1" placeholder="Identifiant" required>
				</div>
				<div class="input-group">
					<label class="label-suscribe" for="email_addr">Adresse e-mail&nbsp;:</label>
					<input class="input-subscripe" type="email" id="email_addr" name="email_addr" tabindex="2" placeholder="adresse@mail.fr" required>
				</div>
				<div class="input-group">
					<label class="label-suscribe" for="email_addr_repeat">Confirmez l'adresse e-mail&nbsp;:</label>
					<input class="input-subscripe" type="email" id="email_addr_repeat" name="email_addr_repeat" tabindex="3" placeholder="adresse@mail.fr" required 
						oninput="checkConfirmEmail(this)">
				</div>
	            <div class="input-group">
					<label class="label-suscribe" for="password">Mot de passe&nbsp;:</label>
					<input class="input-subscripe" type="password" id="password" name="password" placeholder="Password" required>
				</div>
				<div class="input-group">
					<label class="label-suscribe" for="password_repeat">Confirmez le mot de passe&nbsp;:</label>
					<input class="input-subscripe" type="password" id="password_repeat" name="password_repeat" placeholder="Confirm Password" required 
						oninput="checkConfirmPassword(this)">
				</div>
				<div class="input-group">
					<input class="input-subscripe" type="submit" value="inscription" /> 
				</div>
			</ul>
		</form><?php }
}