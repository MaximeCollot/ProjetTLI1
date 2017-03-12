<?php
/* Smarty version 3.1.30, created on 2017-03-07 15:29:22
  from "/Applications/MAMP/htdocs/ProjetTLI1/Acuponcture/templates/validation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bec3c2206565_11641843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f3719ae0d29bb9e872324964b79b1cb686f820' => 
    array (
      0 => '/Applications/MAMP/htdocs/ProjetTLI1/Acuponcture/templates/validation.tpl',
      1 => 1488884241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bec3c2206565_11641843 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="confirm">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo $_smarty_tpl->tpl_vars['messageValidation']->value;?>

</div><?php }
}
