<?php
/* Smarty version 3.1.30, created on 2017-03-20 13:52:35
  from "/Applications/MAMP/htdocs/templates/patho.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cfd0931fbcd1_27032808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '836ac0fc3e4835d0becd1bbe138d572301aff717' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/patho.tpl',
      1 => 1490014306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cfd0931fbcd1_27032808 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Pathologies</h1>
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