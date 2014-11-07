<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 12:57 AM
 */

require('DB.php');

class usuario {

    private $id;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $telefono;
    private $calle;
    private $numeroExterior;
    private $numeroInterior;
    private $colonia;
    private $municipio;
    private $estado;
    private $cp;
    private $correo;
    private $usuario;
    private $contrasena;
    private $nivel;
    private $estatus;

    public function create($nombre,$apellido_paterno,$apellido_materno,$nivel){
        echo "<center><b>Registro exitoso</b></center>";

        $sqlInsertarUsario = "INSERT INTO usuario (nombre,apellido_paterno,apellido_materno,nivel,estatus)
        VALUE ('$nombre','$apellido_paterno','$apellido_materno',$nivel,1)";
        $resultInsertarUsuario = mysql_query($sqlInsertarUsario) or die ("Error al insertar");
    }


    public function readGeneral(){
        echo "<center><b>Resultados de consulta </b></center>";
        $sqlReadGeneral = "select * from usuario ORDER BY apellido_paterno asc ";
        $resultReadGeneral = mysql_query($sqlReadGeneral)or die ("Error en $sqlReadGeneral");

        echo "<div class=carousel>";
        echo "<table class='table table-striped'  align='center'>";
        echo "<tr><td colspan='5' ><strong><center>Lista de usuarios</center></strong></td></tr>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido paterno</th><th>Apellido materno</th> <th>Nivel</th></tr>";
        while ($field = mysql_fetch_array($resultReadGeneral)){
            $this->id = $field['id'];
            $this->nombre = $field['nombre'];
            $this->apellidoPaterno = $field ['apellido_paterno'];
            $this->apellidoMaterno = $field ['apellido_materno'];
            $this->nivel = $field ['nivel'];
            if ($field ['nivel'] == 1){

                echo "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellidoPaterno</td><td>$this->apellidoMaterno</td><td>Administrador</td></tr>";
            }
            else{
                echo "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellidoPaterno</td><td>$this->apellidoMaterno</td><td>Usuario</td></tr>";
            }


        }



    }


    public function readSpecific($id){
        echo "<center><b>Resultados de consulta especifica</b></center>";

        $sqlReadSpecific = "select * from usuario where estatus =1 and id = $id ORDER BY apellido_paterno  asc ";
        $resultReadSpecific = mysql_query($sqlReadSpecific)or die ("Error en $sqlReadSpecific");
        echo "<div class=carousel>";
        echo "<table class='table table-striped'  align='center'>";
        echo "<tr><td colspan='3' aling=center ><strong>Lista de usuarios</strong><strong></td></tr>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido paterno</th><th>Apellido materno</th> <th>Nivel</th></tr>";
        while ($field = mysql_fetch_array($resultReadSpecific)){
            $this->id = $field['id'];
            $this->nombre = $field['nombre'];
            $this->apellidoPaterno = $field ['apellido_paterno'];
            $this->apellidoMaterno = $field ['apellido_materno'];
            $this->nivel = $field ['nivel'];


            if ($field ['nivel'] == 1){

                echo "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellidoPaterno</td><td>$this->apellidoMaterno</td><td>Administrador</td></tr>";
            }
            else{
                echo "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellidoPaterno</td><td>$this->apellidoMaterno</td><td>Usuario</td></tr>";
            }


        }
    }


    public function update($nombre,$apellido_paterno,$apellido_materno,$nivel,$id){
        echo "<center><b>Se Modifico el registro</b></center>";

        $sqlUpdateSpecific = "UPDATE usuario set nombre='$nombre' , apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', nivel=$nivel where id=$id  ";
        $resultUpdateUser = mysql_query($sqlUpdateSpecific) or die ("Error update");
    }


    public function deleteUser($id){
        echo "<center><b>Se elimino registro</b></center>";

        $sqlUpdateSpecific = "DELETE FROM usuario where id=$id ";
        $resultUpdateUser = mysql_query($sqlUpdateSpecific) or die ("Error delete");
    }

}