<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="../controladores/ActualizarClave.php">
            <label>Ususaro</label><div><input type="text" name="usuario"></div>
            <label>Clave Antigua</label><div><input type="password" name="passNueva"></div>
            <label>Confirma Clave Nueva</label><div><input type="password" name="passConfirma"></div>
            <input type="submit" value="Cambiar Clave">
        </form>  
    </body>
</html>
