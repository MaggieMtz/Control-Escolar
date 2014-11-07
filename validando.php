<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 02/10/2014
 * Time: 01:12 PM
 */
require_once('DB.php');
require('header.php');

//se realiza la busqueda del usuario en la BD para verificar si exíste, así mismo, se verifíca que esté activo y se redirecciona según el resultado de las consultas.
$sqlUsuario = "select * from usuario where usuario = '".$_POST['user']."' and contrasena = '".$_POST['psw']."';";
$consultaUsuario = mysql_query($sqlUsuario) or die (mysql_error());
$cuantosUsuario = mysql_num_rows($consultaUsuario);

if($cuantosUsuario != 0){
    $_SESSION["sesionUsuario"] = null;
    $estatus = mysql_result($consultaUsuario, 0, 'estatus');

    //Comparación para verificar si esta activo
    if($estatus != 1){


        echo "<script>
                    alert('Tu cuenta no esta activa.');
                    location.href = 'http://localhost/proyecto/acceso_usuario.php';
                    </script>";
    }
    else{

        $nombre = mysql_result($consultaUsuario, 0, 'nombre');
        $id = mysql_result($consultaUsuario, 0, 'id');

        $_SESSION['sesionUsuario'] = $id;


        echo "<script>
                    location.href = 'index.php';
                    </script>";

    }
}
else{

    echo "<script>
               alert(' Usuario Incorrecto o contraseña incorrecto.');
               location.href = 'http://localhost/proyecto/acceso_usuario.php';
               </script>";
}