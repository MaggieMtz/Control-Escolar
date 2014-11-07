<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 02/10/2014
 * Time: 11:42 AM
 */

require('DB.php');
require('header.php');


Echo"   <center><h1>Bienvenido al Control Escolar</h1>
            <table align='center' bgcolor='blue'> <form name='forma' action='validando.php' method='POST'>
            <tr><td><label for='nombre' class='label label-info'>Usuario: </label></td>
            <td><input name='user' type='text' required/><br><br></td></tr>
            <tr><td><label for='psw' class='label label-info'>Contraseña:   </label></td>
            <td><input name='psw' type='password'  required/><br><br></td></tr><br><br>
            <tr><td colspan='2'><center><input name='btnguardar' type='submit'  value='Entrar' class='btn btn-lg btn-info'>
            </center></td></tr>
            <br></form>";

require('footer.php');