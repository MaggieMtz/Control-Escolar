<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 25/09/2014
 * Time: 06:36 PM
*/

require_once('DB.php');
require('Grupo.php');
require('header.php');
require('menu.php');



$grupo = new Grupo();

echo "<form name=grupo action=AsignarGrupo.php method=Post>
<table align='center'>

<tr><td colspan='2'> <center><strong>Asignar Grupo</strong></center><br></td></tr>";

$grupo->UsuarioAlumno(3);
$grupo->GrupoUsuario();
?>

<tr><td><center><br><input type="submit" name="Asignar" value="Asignar"></center></td></tr>