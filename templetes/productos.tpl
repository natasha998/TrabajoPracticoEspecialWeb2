{{include file="./header.tpl"}}
	<h2>{{$titulo}}</h2>

	<table>
		{{foreach from=$productos item=$producto}}
			<tr>
				<td><a href="producto-unico/{$producto->id_producto}" >{{$producto->nombre_p}}</a></td>
				<td>{{$producto->precio_p}}</td>
				<td>{{$producto->id_producto}}</td>
				<td>
					<a href="borrar-prod/{$producto->id_producto}" id="borrarProduto" class="btn">Borrar</a>	
					<a href="editar-prod/26" id="editarProduto" class="btn">Editar</a>	
				</td>
			</tr>
		{{/foreach}}
	</table>

<div class="ocultaAgregarProd">
	<h2>Agragar Productos</h2>
	<form action="agregar-producto" method="POST"> 
		<label for="producto">Nombre del producto</label>
		<input type="text" id="nombre_prod" name="nombre">
		<label for="marca">Marca</label>
		<input type="text" id="marca_prod" name="marca">
		<label for="precio">Precio</label>
		<input type="number" id="precio_prod" name="precio">
		<label for="stock">Stock</label>
		<input type="number" id="stock_prod" name="stock">
		<label for="categoria">Categoria:</label>
		<select name="categoria" id="categoria_prod">
		{{foreach from=$categorias item=$categoria}}
			<option value="{{$categoria->id_categoria}}" name="categoria">{{$categoria->nombre_categoria}}</option>
		{{/foreach}}
			</select>
		<input type="submit" value="Cargar Productos">
	</form>
</div>

<div class="ocultaEditarProd">
	<h2>Editar  Productos</h2>

	<form action="editar-prod/26" method="POST"> 
		<label for="producto">Nombre del producto</label>
		<input type="text" id="nombre_prod" name="nombre_ed">
		<label for="marca">Marca</label>
		<input type="text" id="marca_prod" name="marca_ed">
		<label for="precio">Precio</label>
		<input type="number" id="precio_prod" name="precio_ed">
		<label for="stock">Stock</label>
		<input type="number" id="stock_prod" name="stock_ed">		
		<input type="text" id="cat_prod" name="categoria" value="categoria">		
		<input type="submit" value="Cargar Productos">
	</form>
</div>
{{include file="./footer.tpl"}}

