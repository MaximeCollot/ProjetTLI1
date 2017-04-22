<?php
/* Smarty version 3.1.30, created on 2017-03-27 00:47:33
  from "C:\Users\Maxime\Documents\ProjetTLI\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d8612566a177_84303813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2755a68238575f3768d060f34359d27170afa34' => 
    array (
      0 => 'C:\\Users\\Maxime\\Documents\\ProjetTLI\\templates\\home.tpl',
      1 => 1490575515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d8612566a177_84303813 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="description" class="mw-content-ltr" lang="fr" dir="ltr">
    <h1>Bienvenue !</h1>
    
    <p>Les acupuncteurs du dimanche vous souhaitent la bienvenue sur leur site. Vous pourrez consulter ici les différentes pathologies liées au déséquilibre de vos méridiens et les symptomes associés.</p>

    <h2>Pour commencer, qu'est-ce que l'acupuncture ?</h2>

    <p>L'acupuncture est l'une des cinq branches de la Médecine traditionnelle chinoise. Elle se base sur une approche énergétique et holistique. Selon la pensée médicale orientale, elle agit sur le Qi (prononcer tchi) qui circule dans le corps par la voie des méridiens. Des aiguilles insérées à la surface de la peau stimulent des points d’acupuncture précis afin de régulariser le Qi ainsi que des fonctions physiologiques, organiques et psychiques ciblées. En termes occidentaux, on pourrait dire que cela permet de renforcer les processus d’autorégulation et de guérison.</p>

    <img id="acupuncture-home-img" src="img/acupuncture.png" alt="illustration acupuncture">
</div>

<div id = "flux" class="fluxRSS">
    <h1 id="flux-titre">Flux RSS</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rss']->value, 'itemRSS');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemRSS']->value) {
?>
        <a href=<?php echo $_smarty_tpl->tpl_vars['itemRSS']->value->getLien();?>
 ><?php echo $_smarty_tpl->tpl_vars['itemRSS']->value->getTitre();?>
</a>
        <p><?php echo $_smarty_tpl->tpl_vars['itemRSS']->value->getDesc();?>
</p>
        <p class="date"><?php echo $_smarty_tpl->tpl_vars['itemRSS']->value->getDate();?>
</p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</div><?php }
}
