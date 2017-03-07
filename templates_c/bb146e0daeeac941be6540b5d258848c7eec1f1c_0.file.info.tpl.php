<?php
/* Smarty version 3.1.30, created on 2017-03-07 16:40:37
  from "/Applications/MAMP/htdocs/ProjetTLI1/templates/info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bed475d729e0_38950455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb146e0daeeac941be6540b5d258848c7eec1f1c' => 
    array (
      0 => '/Applications/MAMP/htdocs/ProjetTLI1/templates/info.tpl',
      1 => 1488901235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bed475d729e0_38950455 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>About</h1>


<div id="info">



	<h2>Fonctionnalités à implémenter (première partie ou tronc commun)</h2>

	<h3>Consultation des pathologies, critères de filtrage</h3>

	<p>Vous réaliserez une page permettant d’afficher la liste des pathologies. Ces pathologies pourront faire l’objet de filtrage comme indiqué en introduction. Vous vous efforcerez d’optimiser au maximum votre solution en limitant autant que possible les requêtes sur le serveur MySQL. Vous êtes totalement libres dans le choix de l’interface graphique.</p>

	<h3>Recherche de pathologies par mot–clef</h3>

	<p>Vous implémenterez une fonctionnalité de recherche de pathologie par mot–clef. Les mot–clefs sont associés aux symptôme dans la base de connaissance. Cette fonctionnalité ne sera accessible qu’aux utilisateurs authentifiés.</p>

	<h3>Compte utilisateur</h3>

	<p>Vous proposerez un système de gestion des utilisateurs (inscription, login, session, etc.). Un utilisateur connecté aura la possibilité d’accéder à la fonctionnalité de recherche de pathologies par mot–clef.</p>

</div><?php }
}
