<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale?1.0,max-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    </head>
        <header class="header">

        <ul class="menu">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="educativo.html">Educativo</a></li>
        <li><a href="cuentos.html">Cuentos</a></li>
        <li><a href="letras.html">Letras</a></li>
        <li><a href="colores.html">Colores</a></li>
        <li><a href="familia.html">Familia</a></li>
        <li><a href="index.php">Login</a></li>
        <li><a href="#">Registrar</a></li>
        
        </header>
    <body>


        <div id="contenedor">

            <div id="central"></div>
                <div id="login">
                    <div id="titulo">
                        Bienvenido
                </div>
                <img width="30%" src="http://localhost/Evaluacion2_TM/assets/img/bebes.png">
                <img width="30%" src="http://localhost/Evaluacion2_TM/assets/img/bebes.png">
                <img width="30%" src="http://localhost/Evaluacion2_TM/assets/img/bebes.png">
                

                    <form action="validar.php" method="POST" id="loginform">
                        <input type="text" name="user" placeholder="Usuario" required>
                        
                        <input type="password" name="password" placeholder="Contraseña" required>
                        
                        <input type="submit" value="Ingresar">
                        <!-- // href="index.html" type="submit" title="Ingresar" name="Ingresar" */ -->
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="#">¿No tienes Cuenta? Registrate</a>
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>