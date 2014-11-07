<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 02/10/2014
 * Time: 06:47 PM
 */

require('Grupo.php');
require('DB.php');
require('header.php');

$grupo = new Grupo();
$grupo->selectGrupo(1);



require ('footer.php');