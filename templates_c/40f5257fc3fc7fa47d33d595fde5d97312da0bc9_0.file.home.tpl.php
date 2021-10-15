<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:00:12
  from 'D:\xampp\htdocs\TrabajoPracticoEspecialWeb2\templetes\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168b67ca12b03_75688508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40f5257fc3fc7fa47d33d595fde5d97312da0bc9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TrabajoPracticoEspecialWeb2\\templetes\\home.tpl',
      1 => 1634252143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6168b67ca12b03_75688508 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<h2>Home:/</h2>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

<?php }
}
