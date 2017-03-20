<?php
/* Smarty version 3.1.30, created on 2017-03-07 07:50:40
  from "/Applications/MAMP/htdocs/ProjetTLI1/Acuponcture/templates/patho.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be5840929cd2_16432345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a2dd3450cf857a528b95ecf06d156f6cb2f03b8' => 
    array (
      0 => '/Applications/MAMP/htdocs/ProjetTLI1/Acuponcture/templates/patho.tpl',
      1 => 1488869304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be5840929cd2_16432345 (Smarty_Internal_Template $_smarty_tpl) {
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
