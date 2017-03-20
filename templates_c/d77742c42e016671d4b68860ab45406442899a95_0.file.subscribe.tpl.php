<?php
/* Smarty version 3.1.30, created on 2017-03-20 13:40:22
  from "/Applications/MAMP/htdocs/templates/subscribe.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cfcdb6ce9695_90838794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd77742c42e016671d4b68860ab45406442899a95' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/subscribe.tpl',
      1 => 1488900980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cfcdb6ce9695_90838794 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Inscription</h1>

<form class="form-subscribe" method="post" action="index.php?page=home" id="formulaire">
	
	<div class="input-group">
		<label class="label-suscribe" for="idperso">Identifiant&nbsp;:</label>
		
		<input  class="input-subscripe" type="text" id="idperso" name="idperso" tabindex="10" pattern="[A-Za-z0-9]{3,}" placeholder="Identifiant" required oninvalid="setCustomValidity('Le nom d\'utilisateur doit être composé d\'au moins 3 caractères')" onchange="try{setCustomValidity('')}catch(e){}">
		
	</div>
	<div class="input-group">
		<label class="label-suscribe" for="email_addr">Adresse e-mail&nbsp;:</label>
		
		<input class="input-subscripe" type="email" id="email_addr" name="email_addr" tabindex="11" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="adresse@mail.fr" required onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Le format d\'adresse mail est incorrect' : ''); if(this.checkValidity()) form.email_addr_repeat.pattern = this.value;">
		
	</div>
	<div class="input-group">
		<label class="label-suscribe" for="email_addr_repeat">Confirmez l'adresse e-mail&nbsp;:</label>
		
		<input class="input-subscripe" type="email" id="email_addr_repeat" name="email_addr_repeat" tabindex="12" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="adresse@mail.fr" required onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les adresses mail ne correspondent pas' : '');">
		
	</div>
	<div class="input-group">
		<label class="label-suscribe" for="password">Mot de passe&nbsp;:</label>
		
		<input class="input-subscripe" type="password" id="password" name="password" tabindex="13" pattern="^\S{8,}$" placeholder="Password" required onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Le mot de passe doit être composé d\'au moins 8 caractères' : ''); if(this.checkValidity()) form.password_repeat.pattern = this.value;">
		
	</div>
	<div class="input-group">
		<label class="label-suscribe" for="password_repeat">Confirmez le mot de passe&nbsp;:</label>
		
		<input class="input-subscripe" type="password" id="password_repeat" name="password_repeat" tabindex="14" pattern="^\S{8,}$" placeholder="Confirm Password" required onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passe ne correspondent pas' : '');">
		
	</div>
	<div class="input-group">
		<input class="input-subscripe" type="submit" name="inscription" tabindex="15" /> 
	</div>
	
</form>
<?php }
}