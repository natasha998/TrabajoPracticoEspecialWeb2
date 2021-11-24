{include file="./header.tpl"}
<ul>
    {foreach from=$usuarios item=$usuario}
        <li>{$usuario->name_user}</li>
        <li>{$usuario->email_user}</li>
        <li><a href="borrar/{$usuario->id_user}">Borrar</a></li>
        <li><a href="cambiar-rol/{$usuario->id_user}">Cambiar el rol</a></li>
    {/foreach}
</ul>

{include file="./footer.tpl"}