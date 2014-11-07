<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 09:59 AM
 */

require('Materia.php');
require('DB.php');
require('header.php');
require('menu.php');

$materia = new Materia();

if (isset ($_POST['submit'])){
    switch ($_POST['submit']){
        case "seleccionar":
            echo "<br>Bot&oacute;n: " .$_POST['submit'];
            $materia->selectMaestro($_POST['idMaestro']);
            echo $materia;
            break;

    }
}

echo "<form name=materia action=AsignarMaterias.php method=Post>
<table align='center'>

<tr><td colspan='2'> <center><strong>Asignar maestro</strong></center><br></td></tr>";

$sqlMaestro = "SELECT * from maestro";
    $consultaMaestro = mysql_query($sqlMaestro);
    $cuantosMaestro =mysql_num_rows($consultaMaestro);
    if ($consultaMaestro != 0) {
        echo "<tr><td>Maestro: <select name ='idMaestro' id='idMaestro'>";
        for ($y = 0; $y < $cuantosMaestro; $y++) {

            $id = mysql_result($consultaMaestro, $y, 'idMaestro');
            $nombre = mysql_result($consultaMaestro, $y, 'NombreMaestro');
            $app = mysql_result($consultaMaestro, $y, 'apellidoPaternoMaestro');
            $apm = mysql_result($consultaMaestro, $y, 'apellidoMaternoMaestro');
            echo "<option value = '$id'>$nombre $app $apm</option> ";

        }
    }
    else{
        echo "No hay maestros en la Base de Datos";
    }



 echo "</select><br><br></td><</tr>
<tr><td colspan=2 ><center><input type=submit name='seleccionar'></center></td></tr></table></form>";