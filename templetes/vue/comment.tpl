{literal}
<div id="#comentarios-vue">
    <h1>{{ usuario }}</h1>
    <h2>{{ comentario }}</h2>

    <ul id="lista-comentario">
        <li v-for="comentario in comentarios">
            {{comentario.nombre}} | {{comentario.puntaje}}
        </li>
    </ul>
</div>
{/literal} 