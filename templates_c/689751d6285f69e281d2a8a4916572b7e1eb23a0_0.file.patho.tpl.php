<?php
/* Smarty version 3.1.30, created on 2017-03-20 15:53:32
  from "C:\Users\Maxime\Documents\ProjetTLI\templates\patho.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cffafc7979f5_84204088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '689751d6285f69e281d2a8a4916572b7e1eb23a0' => 
    array (
      0 => 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\templates\\patho.tpl',
      1 => 1490025208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cffafc7979f5_84204088 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\lib\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) require_once 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\lib\\smarty\\plugins\\function.html_checkboxes.php';
?>
<h1>Pathologies</h1>
	<form action="index.php?page=patho" method="post">
			<?php echo smarty_function_html_options(array('name'=>'type','options'=>$_smarty_tpl->tpl_vars['type']->value),$_smarty_tpl);?>

<!-- 		<?php echo smarty_function_html_options(array('name'=>'meridien','options'=>$_smarty_tpl->tpl_vars['meridien']->value),$_smarty_tpl);?>

		<?php echo smarty_function_html_checkboxes(array('name'=>'caracteristique','options'=>$_smarty_tpl->tpl_vars['caracteristique']->value),$_smarty_tpl);?>
 -->
		<input type="submit" name="Filtrer" value="Filtrer">
	</form>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_patho']->value, 'categorie', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['categorie']->value) {
?>
		<div class="typePatho">
		<h2>Type de pathologie : <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h2>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorie']->value, 'meridien', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['meridien']->value) {
?>
			<div class="meridien">
			<h3>Méridien : <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h3>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meridien']->value, 'carac', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['carac']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value != 'neant') {?>
				<h4>Caratéristique : <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h4>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carac']->value, 'pathologie', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pathologie']->value) {
?>
					<h5>Pathologie : <?php echo $_smarty_tpl->tpl_vars['pathologie']->value->getDescription();?>
</h5>
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

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
