{{include file="./header.tpl"}}
  <h4>Iniciar</h4>
        <form action="acceso" method="POST">
        {if $sesion == "Inicio" }
            <p>{{$sesion}}</p> 
        {else}
            <label for="user">Usuario</label>
            <input type="text" placeholder="usuario" name="userIn" required>
            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña"  name="password" required>
            <input type="submit" value="Iniciar">
        </form>
        {/if}
            
{*         
    <form action="registrar" method="POST">
    <p>{{$error}}</p>
        <label for="user">Usuario</label>
        <input type="text" placeholder="usuario" name="user">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="contraseña" name="password">
        <input type="submit" value="Registrar">
    </form> *}

    
    {{include file="./footer.tpl"}}



