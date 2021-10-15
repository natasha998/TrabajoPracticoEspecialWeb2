<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:01:40
  from 'D:\xampp\htdocs\TrabajoPracticoEspecialWeb2\templetes\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c4e4604f30_75334241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73364e8443c43b5b746a04e18c6a72e26a40b153' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TrabajoPracticoEspecialWeb2\\templetes\\categorias.tpl',
      1 => 1634256090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6168c4e4604f30_75334241 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

	<h2>Categorias Tabla</h2>

	<table>
		<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

			<tr>
				<td><a href="mostrarTablaProductos/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>
</td>
				<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['categoria']->value->tipo_categoria;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
				<td>
					<a href="borrar-cat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" id="borrarCategoria" class="btn">Borrar</a>	
				</td>
				<td>
					<a href="editar-cat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" id="editarCategoria" class="btn">Editar</a>	
				</td>
			</tr>
		<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

	</table>
	
	<div >
		<h2>Editar categorias</h2>
			<form action="editar-cat/18" method="POST"> 
				<label for="categoria">Editar categoria:</label>
				<input type="text" id="nombre_c" name="nombre_c_ed">
				<label for="tipo_c">Tipo de categoria</label>
				<input type="text" id="tipo_c" name="tipo_c_ed">
				<input type="submit" value="Cargar Categorias">
			</form>
	</div>

	<div>
		<h2>Nueva categorias</h2>
		<form action="agregar-categorias" method="POST"> 
			<label for="categoria">Nombre de la categoria</label>
			<input type="text" id="nombre_c" name="nombre_c">
			<label for="tipo_c">Tipo de categoria</label>
			<input type="text" id="tipo_c" name="tipo_c">
			<input type="submit" value="Cargar Categorias">
		</form>
	</div>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
