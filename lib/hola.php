<?php
//Autor: Manuel Paniagua <mpaniagua@iestrassierra.com>

require('HolaMundo.php');

print "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);;

?>
