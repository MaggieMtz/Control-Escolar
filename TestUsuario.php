<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 12:58 AM
 */

require('Usuario.php');
require('DB.php');
require('header.php');
require('menu.php');

$usuario = new usuario();

if (isset ($_POST['submit'])){
    switch ($_POST['submit']){
        case "Alta":
            echo "<br>Bot&oacute;n: " .$_POST['submit'];
            $usuario->create("$_POST[nombre]","$_POST[app]","$_POST[apm]",$_POST['nivel']);
            break;

        case "Borrar":
            echo "<br>Bot&oacute;n: " .$_POST['submit'];
            $usuario->deleteUser("$_POST[idEliminar]");
            break;

        case "Modificar":
            echo "<br>Bot&oacute;n: " .$_POST['submit'];
            $usuario->update("$_POST[nombre]","$_POST[app]","$_POST[apm]",$_POST['nivel'],"$_POST[idModificar]");
            break;

        case "Buscar":
            echo "<br>Bot&oacute;n: " .$_POST['submit'];
            if ("$_POST[idBuscar]" == '')
            {
                $usuario->readGeneral();
            }
            else
            {
                $usuario->readSpecific("$_POST[idBuscar]");
            }
            break;
    }
}

echo "<form name=alumno action=TestUsuario.php method=Post>
<table align='center'>
<tr><td colspan='2'> <center><strong>Buscar usuarios</strong></center></td></tr>
<tr><td>ID: </td><td><input type=text name=idBuscar> <br><br></td></tr>
<tr><td colspan='2' ALIGN='center'> <input type=submit name=submit value=Buscar><br><br></td></tr>

<tr><td colspan='2'> <center><strong>Nuevo usuario</strong></center></td></tr>
<tr><td>Nombre(S): </td><td><input type=text name=nombre> </td></tr>
<tr><td>Apellido paterno: </td><td><input type=text name=app> </td></tr>
<tr><td>Apellido materno: </td><td><input type=text name=apm> </td></tr>
<tr><td>Nivel: </td><td><select name=nivel><option value=1>Administrador</option>
<option value=2>Usuario</option></select><br><br> </td></tr>
<tr><td colspan='2' align='center'> <input type=submit name=submit value=Alta> <br><br></td></tr>

<tr><td colspan='2'> <center><strong>Eliminar usuario</strong></center></td></tr>
<tr><td>ID Usuario: </td><td><input type=text name=idEliminar><br><br> </td></tr>
<tr><td colspan='2' align='center'> <input type=Submit name=submit value=Borrar><br><br></td></tr>

<tr><td colspan='2'> <center><strong>Modificar usuario, usar los campos <br>de nuevo usuario y clic modificar</strong></center></td></tr>
<tr><td>ID Usuario: </td><td><input type=text name=idModificar><br><br> </td></tr>
<tr><td colspan='2' align='center'> <input type=submit name=submit value=Modificar></td></tr>

 </table></form>";