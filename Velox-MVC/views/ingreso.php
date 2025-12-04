<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>

    <h2>Inicio de Sesión</h2>

    <form onsubmit="return validarLogin()">
        <label>Usuario:</label>
        <input type="text" id="usuario"><br><br>

        <label>Contraseña:</label>
        <input type="password" id="pass"><br><br>

        <button type="submit">Ingresar</button>
    </form>

    <p id="mensaje"></p>

    <script>
        function validarLogin() {
            let usuario = document.getElementById("usuario").value;
            let pass = document.getElementById("pass").value;
            let mensaje = document.getElementById("mensaje");

            if(usuario === "admin" && pass === "12345") {
                // Acceso correcto: redirige al dashboard
                window.location.href = "dashboard.php";
                return false; // evita que se recargue la página
            } else {
                mensaje.style.color = "red";
                mensaje.innerHTML = "Usuario o contraseña incorrectos.";
                return false;
            }
        }
    </script>

</body>
</html>
