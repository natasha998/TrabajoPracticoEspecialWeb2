{{include file="./header.tpl"}}
  <h4>Iniciar</h4>
        <form action="acceso" method="POST">
        {if $session == "inicio"}
            <p>{$session}</p> 
        {else}
            <label for="user">Usuario</label>
            <input type="text" placeholder="usuario" name="email_user" required>
            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña"  name="password" required>
            <input type="submit" value="Iniciar">
        </form>
        <form action="registrar" method="POST">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" placeholder="nombre" name="nombre" required>
            <label for="fechaDeNacimiento">fechaDeNacimiento:</label>
            <input type="date" name="fechaDeNacimiento" >
            <label for="email">Email:</label>
            <input type="text" placeholder="email" name="email" required>
            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña" name="password" required>
            <label for="passwordComfirm">Confirmar contraseña:</label>
            <input type="password" placeholder="contraseña" name="passwordConfirm" required>
            <input type="submit" value="Registrar">
        </form>
        {/if}
    {{include file="./footer.tpl"}}



