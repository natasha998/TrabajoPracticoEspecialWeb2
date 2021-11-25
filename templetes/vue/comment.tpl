{literal}
    <div id="comentarios-vue">

        <h2>Comentarios (<span v-if="comentarios.length">{{ comentarios.length }}</span>)
        </h2>
        
        <ul id="lista-comentarios" class="list-group listComments">
            <li v-for="comentario in comentarios" class="list-group-item comment">
                <div class="usuario">
                    {{comentario.usuario}} | <i v-for="n in parseInt(comentario.puntuacion)" class="fas fa-star"></i>
                </div>
                <div class="comentarioTexto">{{comentario.comentario}}</div>
                <span class="fecha">{{comentario.fecha}}</span>
                <input id="eliminarComentario" type="button"
                    :data-id_comentario="comentario.id_comentario" value="borrar">
            </li>
        </ul>
    </div>
{/literal}