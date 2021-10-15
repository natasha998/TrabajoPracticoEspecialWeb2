{{include file="./header.tpl"}}
	<h2>Categorias Tabla</h2>

	<table>
		{{foreach from=$categorias item=$categoria}}
			<tr>
				<td><a href="productos-categoria/{$categoria->id_categoria}">{$categoria->nombre_categoria}</td>
				<td>{{$categoria->tipo_categoria}}</td>
				<td>
					<a href="borrar-cat/{$categoria->id_categoria}" id="borrarCategoria" class="btn">Borrar</a>	
				</td>
				<td>
					<a href="editar-cat/{$categoria->id_categoria}" id="editarCategoria" class="btn">Editar</a>	
				</td>
			</tr>
		{{/foreach}}
	</table>
	
	<div>
		<h2>Editar categorias</h2>
			<form action="editar-cat/{$categoria->id_categoria}" method="POST"> 
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

{include file="./footer.tpl"}


