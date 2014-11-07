<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 12:35 AM
 */

    //Se declarán variables y se ingresan los accesos para conectar a BD y se realiza conexión.
    $bd_server  =  "localhost";
    $bd_user  =  "root";
    $bd_pass  = "";
    $bd_name  =  "control";
    $bd_conn = mysql_connect($bd_server, $bd_user , $bd_pass) or die ("Error al comunicarse con el servidor de BD");
    mysql_select_db($bd_name, $bd_conn) or die ("Error al seleccionar BD");
    mysql_query("SET NAMES utf8");

?>