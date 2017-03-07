<?php
/* Smarty version 3.1.30, created on 2017-03-06 10:13:57
  from "C:\Users\Maxime\Documents\ProjetTLI\Acuponcture\templates\patho.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bd36653eb400_91923615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1589fd576f7040a08d7980db1fce7a6a8adf9663' => 
    array (
      0 => 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\Acuponcture\\templates\\patho.tpl',
      1 => 1488794805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bd36653eb400_91923615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Pathologies</h1>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_patho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
    <strong><?php echo $_smarty_tpl->tpl_vars['patho']->value;?>
</strong><br />

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
