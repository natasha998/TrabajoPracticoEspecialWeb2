<div id="coment">
	<form action="api/comentarios" :data-id_producto="producto->id_producto" :data-id_usuario="usuario->id_usuario" id="data-prod">
		<input type="text-area" name="text-coment" placeholder="Comentario" id="comentario">
		<label>Califica este producto:</label>
		<input type="range" name="puntaje"  min="1" max="5" id="puntaje">
		<input type="submit" value="Enviar" id="data-send">
	</form>
	<div id="comentarios-countainer">
	{{include file="templetes/vue/comment.tpl"}}
	</div>
</div>