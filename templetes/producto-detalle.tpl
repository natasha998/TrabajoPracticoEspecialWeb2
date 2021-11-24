
{{include file="./header.tpl"}}

<h2>{{$titulo}}</h2>

<table id="prod">
		<tr>
			<td>{{$producto->nombre_p}}</td>
			<td>{{$producto->marca_p}}</td>
			<td>{{$producto->precio_p}}</td>
			<td>{{$producto->stock_p}}</td>
			<td>{{$producto->id_categoria}}</td>
        </tr>
</table>

{{include file="./comentarios.tpl"}}

<script src="js/apiInfo.js"></script>
{{include file="./footer.tpl"}}