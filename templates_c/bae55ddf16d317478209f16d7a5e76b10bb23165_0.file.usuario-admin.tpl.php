<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:05:44
  from 'D:\xampp\htdocs\TrabajoPracticoEspecialWeb2\templetes\usuario-admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168b7c83cc5c6_98179551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bae55ddf16d317478209f16d7a5e76b10bb23165' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TrabajoPracticoEspecialWeb2\\templetes\\usuario-admin.tpl',
      1 => 1634252491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6168b7c83cc5c6_98179551 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

  <h4>Iniciar</h4>
        <form action="acceso" method="POST">
        <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['registrado']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</p>
            <label for="user">Usuario</label>
            <input type="text" placeholder="usuario" name="userIn">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña"  name="password">
            <input type="submit" value="Iniciar">
        </form>
        
    <h4>Registrar</h4>
    <form action="registrar" method="POST">
    <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['error']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</p>
        <label for="user">Usuario</label>
        <input type="text" placeholder="usuario" name="user">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="contraseña" name="password">
        <input type="submit" value="Registrar">
    </form>

    
    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>




<?php }
}
