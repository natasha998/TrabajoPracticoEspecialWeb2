
{{include file="./header.tpl"}}

<h2>{{$titulo}}</h2>

<table>
		<tr>
			<td>{{$producto->nombre_p}}</td>
			<td>{{$producto->marca_p}}</td>
			<td>{{$producto->precio_p}}</td>
			<td>{{$producto->stock}}</td>
			<td>{{$producto->id_categoria}}</td>
        </tr>
</table>

{{include file="./footer.tpl"}}