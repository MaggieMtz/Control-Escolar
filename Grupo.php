<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 02:22 AM
 */

class Grupo
{

    private $id;
    private $nombre;
    private $avatar;
    private $orden;
    private $estatus;

    public function createGrupo()
    {
        echo "function create";

    }


    public function readGrupo()
    {
        echo "function readGeneral";
    }


    public function readSpecificGrupo()
    {
        echo "function readSpecific ";

    }


    public function updateGrupo()
    {
        echo "function update";
    }


    public function deleteGrupo()
    {
        echo "function delete";

    }


    public function UsuarioAlumno($nivel)
    {
        echo "<center><b>Alumnos</b></center>";
        $sqlUsuario = "SELECT * FROM usuario  where nivel=$nivel";
        $resultUsuario = mysql_query($sqlUsuario)or die("Error en la consulta");
        while($field = mysql_fetch_array($resultUsuario)){
            $idAlum = $field['id'];
            $nombreAlum = $field['nombre'];
            $appAlum= $field['apellido_paterno'];
            $apmAlum = $field['apellido_materno'];

            $sqlAsignada="SELECT * FROM grupo_asignado WHERE idAsignadoAlumno = $idAlum";
            $resultAsignada = mysql_query($sqlAsignada)or die("Error en la consulta");
            $cuantosAsignada = mysql_num_rows($resultAsignada);

            if($cuantosAsignada > 0){
                //echo "Todos los alumnos han sido asignados";

            }else{
                echo "<center><input type='checkbox' name='alumno[]' id='alumno' value='$idAlum'/> $nombreAlum $appAlum $apmAlum <br/></center>";

            }
        }


    }



    public function GrupoUsuario()
    {

        $sqlGrupo = "SELECT * from grupo ORDER BY idGrupo";
        $consultaGrupo = mysql_query($sqlGrupo);
        $cuantosGrupo = mysql_num_rows($consultaGrupo);
        if ($consultaGrupo != 0) {
            echo "<tr><td>Grupo: <select name ='idGrupo' id='idGrupo'>";
            for ($y = 0; $y < $cuantosGrupo; $y++) {

                $id = mysql_result($consultaGrupo, $y, 'idGrupo');
                $grupo = mysql_result($consultaGrupo, $y, 'nombreGrupo');
                echo "<option value = '$id'>$grupo</option> ";

            }
        } else {
            echo "No hay maestros en la Base de Datos";
        }
    }

    public function AsignarAlumnoAGrupo($idGrupo)
    {
        if (is_array($_POST['alumno'])) {
            // realizamos el ciclo
            while (list($key, $value) = each($_POST['alumno'])) {
                $sql = mysql_query("INSERT INTO grupo_asignado (idGrupoAlumno, idAsignadoAlumno) VALUES ($idGrupo,$value)");
            }
        }

    }


    public function selectGrupo($idGrupo)
    {

        echo "<center><b>Resultados de alumnos asignadas al grupo </b></center>";

        $sqlReadSpecific = "select * from grupo_asignado where  idGrupoAlumno = $idGrupo ";
        $resultReadSpecific = mysql_query($sqlReadSpecific) or die ("Error en $sqlReadSpecific");
        echo "<div class=carousel>";
        echo "<table class='table table-striped'  align='center'>";
        echo "<tr><td colspan='3' aling=center ><strong>Lista de materias</strong><strong></td></tr>";
        echo "<tr><th>Grupo</th><th>Alumno</th><th>Eliminar</th></tr>";
        while ($field = mysql_fetch_array($resultReadSpecific)) {
            $this->id = $field['idAsignacionAlumno'];
            $grupo = $field['idGrupoAlumno'];
            $this->alumno = $field ['idAsignadoAlumno'];

            $alumno = $this->alumno = $field['idAsignadoAlumno'];

            $sql = "SELECT * FROM grupo WHERE idGrupo=$grupo;";
            $consulta = mysql_query($sql) or die("Error consulta primaria" . MYSQL_ERROR());
            $nombreGrupo = mysql_result($consulta, 0, 'nombreGrupo');


            $sql = "SELECT * FROM usuario WHERE id=$alumno;";
            $consulta = mysql_query($sql) or die("Error consulta primaria" . MYSQL_ERROR());
            $nombreAlumno = mysql_result($consulta, 0, 'nombre');
            $appAlumno = mysql_result($consulta, 0, 'apellido_paterno');
            $apmAlumno = mysql_result($consulta, 0, 'apellido_materno');


            echo "<tr><td>$nombreGrupo</td><td>$nombreAlumno $appAlumno $apmAlumno</td><td><a href='EliminarAsignacionGrupo.php?idAlumno=$alumno&&idGrupo=$idGrupo'>X </a></td></tr>";
        }
    }


    public function deleteAsignacioAlumno($idAlumno)
    {


        $sqlUpdateSpecific = "DELETE FROM grupo_asignado where idAsignadoAlumno=$idAlumno ";
        echo $sqlUpdateSpecific;
        $resultUpdateUser = mysql_query($sqlUpdateSpecific) or die ("Error delete");

    }
}