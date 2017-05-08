<?php
/* Smarty version 3.1.30, created on 2017-05-08 05:15:40
  from "C:\Users\Maxime\Documents\ProjetTLI\templates\patho.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590ffefc7efa33_38928429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '689751d6285f69e281d2a8a4916572b7e1eb23a0' => 
    array (
      0 => 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\templates\\patho.tpl',
      1 => 1494220489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590ffefc7efa33_38928429 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\lib\\smarty\\plugins\\function.html_options.php';
?>
<h1>Pathologies</h1>
	Filtre : 
	<form id="filterForm" action="index.php?page=patho" method="post">
		<label for="typeFilter">Type&nbsp;:</label>
		<?php echo smarty_function_html_options(array('id'=>'typeFilter','name'=>'typeFilter','values'=>$_smarty_tpl->tpl_vars['typeListFilter']->value,'output'=>$_smarty_tpl->tpl_vars['typeListFilter']->value,'selected'=>$_smarty_tpl->tpl_vars['typeSelected']->value),$_smarty_tpl);?>

		<label for="meridienFilter">Meridien&nbsp;:</label>
 		<?php echo smarty_function_html_options(array('id'=>'meridienFilter','name'=>'meridienFilter','values'=>$_smarty_tpl->tpl_vars['meridienListFilter']->value,'output'=>$_smarty_tpl->tpl_vars['meridienListFilter']->value,'selected'=>$_smarty_tpl->tpl_vars['meridienSelected']->value),$_smarty_tpl);?>

 		<label for="caracteristiqueFilter">Caracteristique&nbsp;:</label>
		<?php echo smarty_function_html_options(array('id'=>'caracteristiqueFilter','name'=>'caracteristiqueFilter','values'=>$_smarty_tpl->tpl_vars['caracteristiqueListFilter']->value,'output'=>$_smarty_tpl->tpl_vars['caracteristiqueListFilter']->value,'selected'=>$_smarty_tpl->tpl_vars['caracteristiqueSelected']->value),$_smarty_tpl);?>

		<input type="submit" name="Filtrer" value="Filtrer" hidden>
	</form>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_patho']->value, 'categorie', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['categorie']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['typeSelected']->value || $_smarty_tpl->tpl_vars['typeSelected']->value == 'Tous') {?>
		<div class="typePatho">
		<h2>Type de pathologie : <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h2>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorie']->value, 'meridien', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['meridien']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['meridienSelected']->value || $_smarty_tpl->tpl_vars['meridienSelected']->value == 'Tous') {?>
			<div class="meridien">
			<h3>Méridien : <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h3>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meridien']->value, 'carac', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['carac']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['caracteristiqueSelected']->value || $_smarty_tpl->tpl_vars['caracteristiqueSelected']->value == 'Tous') {?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value != 'neant') {?>
				<h4>Caratéristique : <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h4>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carac']->value, 'pathologie', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pathologie']->value) {
?>
					<h4>Pathologie : <?php echo $_smarty_tpl->tpl_vars['pathologie']->value->getDescription();?>
</h4>
					<h5>Symptome :</h5>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathologie']->value->getSymptomes(), 'symptome', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['symptome']->value) {
?>
						<p><?php echo $_smarty_tpl->tpl_vars['symptome']->value;?>
</p>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php } else { ?>
					Aucune pathologie
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
