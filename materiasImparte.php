<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 02/10/2014
 * Time: 06:44 PM
 */

require('Materia.php');
require('DB.php');
require('header.php');

$materias = new Materia();
$materias->readSpecificMateria(1);



require ('footer.php');
