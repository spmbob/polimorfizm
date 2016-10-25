<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 25.10.2016
 * Time: 15:16
 */
require_once 'Derivative.php';

$b = new Base();
$d = new Derivative();

$b->base_funct();
$d->funct();
$d->base_funct();
?>