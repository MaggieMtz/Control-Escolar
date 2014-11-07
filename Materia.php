<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 02:21 AM
 */

class Materia {

    private $id;
    private $nombre;
    private $avatar;
    private $orden;
    private $estatus;
    private $materia;

    public function createMateria($nombre,$orden){

        echo "<center><b>Registro de materia exitoso</b></center>";

        $sqlInsertarMateria = "INSERT INTO materia (nombreMateria,avatarMateria,estatusMateria)
        VALUE ('$nombre','avatar_usuario/avatar.jpg','x')";
        $resultInsertarMateria = mysql_query($sqlInsertarMateria) or die ("Error al insertar");

    }


    public function readGeneralMateria(){

        echo "<center><b>Resultados de consulta </b></center>";
        $sqlReadGeneral = "select * from materia ORDER BY idMateria asc ";
        $resultReadGeneral = mysql_query($sqlReadGeneral)or die ("Error en $sqlReadGeneral");

        echo "<div class=carousel>";
        echo "<table class='table table-striped'  align='center'>";
        echo "<tr><td colspan='5' ><strong><center>Lista de Materias</center></strong></td></tr>";
        echo "<tr><th>ID</th><th>Nombre materia</th><th>Orden</th></tr>";
        while ($field = mysql_fetch_array($resultReadGeneral)){
            $this->idMateria = $field['idMateria'];
            $this->nombreMateria = $field['nombreMateria'];
            $this->ordenMateria = $field ['ordenMateria'];

            echo "<tr><td>$this->id</td><td>$this->nombreMateria</td><td>$this->ordenMateria</td></tr>";


        }
    }


    public function readSpecificMateria($id){

        echo "<center><b>Resultados de consulta especifica </b></center>";
        $sqlReadGeneral = "select * from materia where idMateria=$id ORDER BY idMateria asc ";
        $resultReadGeneral = mysql_query($sqlReadGeneral)or die ("Error en $sqlReadGeneral");

        echo "<div class=carousel>";
        echo "<table class='table table-striped'  align='center'>";
        echo "<tr><td colspan='5' ><strong><center>Lista de Materias</center></strong></td></tr>";
        echo "<tr><th>ID</th><th>Nombre materia</th><th>Orden</th></tr>";
        while ($field = mysql_fetch_array($resultReadGeneral)){
            $this->idMateria = $field['idMateria'];
            $this->nombreMateria = $field['nombreMateria'];
            $this->ordenMateria = $field ['ordenMateria'];

            echo "<tr><td>$this->id</td><td>$this->nombreMateria</td><td>$this->ordenMateria</td></tr>";


        }

    }

    public function updateMateria($nombre,$orden,$id){


        echo "<center><b>Se Modifico la materia</b></center>";

        $sqlUpdateSpecific = "UPDATE materia set nombreMateria='$nombre' , ordenMateria='$orden'  where idMateria=$id  ";
        $resultUpdateUser = mysql_query($sqlUpdateSpecific) or die ("Error update");
    }


    public function deleteMateria($id){

        echo "<center><b>Se elimino la materia</b></center>";

        $sqlUpdateSpecific = "DELETE FROM materia where idMateria=$id ";
        $resultUpdateUser = mysql_query($sqlUpdateSpecific) or die ("Error delete");

    }

    public function selectMaestro($idMaestro){
        echo " AsignarMateriaMaestro";

        echo "<center><b>Resultados de Materias asignadas</b></center>";

        $sqlReadSpecific = "select * from materia_asignada where  idMaestro = $idMaestro ";
        $resultReadSpecific = mysql_query($sqlReadSpecific)or die ("Error en $sqlReadSpecific");
        echo "<div class=carousel>";
        echo "<table class='table table-striped'  align='center'>";
        echo "<tr><td colspan='3' aling=center ><strong>Lista de materias</strong><strong></td></tr>";
        echo "<tr><th>ID</th><th>Materia</th><th>Eliminar</th></tr>";
        while ($field = mysql_fetch_array($resultReadSpecific)){
            $this->id = $field['idMateriaAsignada'];
            $this->materia = $field['idMateria'];
            $this->maestro = $field ['idMaestro'];

            $materia = $this->materia = $field['idMateria'];



            echo "<tr><td>$this->id</td><td>$this->materia</td><td><a href='eliminarAsignacion.php?idMateria=$materia&&idMaestro=$idMaestro'>Eliminar </a></td></tr>";

        }



    }

    public function AsignarMateriaAMaestro($id,$id_materia){
        echo " AsignarMateriaAGrupo";

        $sqlInsertarUsario = "INSERT INTO materia_asignada (idMateria,idMaestro)
        VALUE ($id,$id_materia)";
        echo $sqlInsertarUsario;
        $resultInsertarUsuario = mysql_query($sqlInsertarUsario) or die ("Error al insertar");

    }
}















