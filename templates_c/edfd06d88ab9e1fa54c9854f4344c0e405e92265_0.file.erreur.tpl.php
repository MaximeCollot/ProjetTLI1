<?php
/* Smarty version 3.1.30, created on 2017-03-07 15:29:42
  from "/Applications/MAMP/htdocs/ProjetTLI1/Acuponcture/templates/erreur.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bec3d685cdb8_65657976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edfd06d88ab9e1fa54c9854f4344c0e405e92265' => 
    array (
      0 => '/Applications/MAMP/htdocs/ProjetTLI1/Acuponcture/templates/erreur.tpl',
      1 => 1488884241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bec3d685cdb8_65657976 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo $_smarty_tpl->tpl_vars['messageErreur']->value;?>

</div><?php }
}
