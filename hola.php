<?php
//Autor: Manuel Paniagua <mpaniagua@iestrassierra.com>
//Nombre por defecto es Mundo

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola {$nombre}\n";

?>
