


<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 10:02 AM
 */


require('Materia.php');
require('DB.php');
require('header.php');
require('menu.php');

$id =$_POST['idMaestro'];
echo $id;
if (isset ($_POST['submit'])){
    switch ($_POST['submit']){
        case "asignar":
            echo "<br>Bot&oacute;n: " .$_POST['submit'];
            $materia->AsignarMateriaAMaestro($_POST['id_materia'],$_POST['id']);
            echo $materia;
            break;

    }
}

$maestro = new Materia();
$maestro->selectMaestro($id);


echo "<form name=asignoMateria action=MateriaListo.php method=Post>
<table align='center'>

<tr><td colspan='2'> <center><strong>Asignar maestro</strong></center><br></td></tr>";
echo "<tr><td>Materia: </td><td><select id=materia name=materia>";

$sqlMateria = "SELECT * FROM materia  ORDER BY idMateria ASC";
$resultMateria = mysql_query($sqlMateria)or die("Error en la consulta");
while($field = mysql_fetch_array($resultMateria)){
    $id_materia = $field['idMateria'];
    $materia = $field['nombreMateria'];

    $sqlAsignada="SELECT * FROM materia_asignada WHERE idMaestro = $id AND idMateria = $id_materia";
    $resultAsignada = mysql_query($sqlAsignada)or die("Erro en la consulta");
    $cuantosAsignada = mysql_num_rows($resultAsignada);

    if($cuantosAsignada > 0){
        //echo "<option value=''>No Disponible</option>";

    }else{
        echo "<option value=$id_materia>$materia</option>";

    }
}
echo "</select></td></tr>

<input type=hidden id=maestro name=maestro value=$id>

<tr><td colspan=2 ><center><input type=submit name='Asignar'></center></td></tr></table></form>";

