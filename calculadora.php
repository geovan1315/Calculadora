<?php

$valoruno=$_POST['1er'];
$valordos=$_POST['2do'];

$opcion=$_POST['operaciones'];

if($opcion == 'suma')
{
 echo"El resultado de la operación es: ".($valoruno+$valordos)
}

else if($opcion == 'mult')
{
 echo"El resultado de la operación es: ".($valoruno*$valordos)
}

else if($opcion == 'divs')
{
 echo"El resultado de la operación es: ".($valoruno/$valordos)
}

else if($opcion == 'rest')
{
 echo"El resultado de la operación es: ".($valoruno-$valordos)
}

?>