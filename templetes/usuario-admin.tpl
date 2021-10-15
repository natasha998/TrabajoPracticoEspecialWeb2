{{include file="./header.tpl"}}
  <h4>Iniciar</h4>
        <form action="acceso" method="POST">
        <p>{{$registrado}}</p>
            <label for="user">Usuario</label>
            <input type="text" placeholder="usuario" name="userIn">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña"  name="password">
            <input type="submit" value="Iniciar">
        </form>
        
    <h4>Registrar</h4>
    <form action="registrar" method="POST">
    <p>{{$error}}</p>
        <label for="user">Usuario</label>
        <input type="text" placeholder="usuario" name="user">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="contraseña" name="password">
        <input type="submit" value="Registrar">
    </form>

    
    {{include file="./footer.tpl"}}



