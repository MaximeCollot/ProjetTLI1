<?php
/* Smarty version 3.1.30, created on 2017-03-07 16:25:33
  from "/Applications/MAMP/htdocs/ProjetTLI1/templates/patho.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bed0ed2c2c11_52201502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39652d8a45e9b7aedb80d90b39d4ad74fa6a699a' => 
    array (
      0 => '/Applications/MAMP/htdocs/ProjetTLI1/templates/patho.tpl',
      1 => 1488900316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bed0ed2c2c11_52201502 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Pathologies</h1>

<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_patho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['patho']->value['desc'];?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul><?php }
}
