<?php
$valoruno=$_POST['1er'];
$valordos=$_POST['2do'];


$opcion=$_POST['operaciones'];

$Resultado="Su resultado es:";

if($opcion == 'suma')
{
 echo $Resultado=($valoruno+$valordos);
}

else if($opcion == 'mult')
{
 echo $Resultado=($valoruno*$valordos);
}

else if($opcion == 'divs')
{
 echo $Resultado=($valoruno/$valordos);
}

else if($opcion == 'rest')
{
 echo $Resultado=($valoruno-$valordos);
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="diseño.css" />
</head>
<body>
<header>
  <div align="center" id="Titulo">
   <h1> RESPUESTA </h1>
 </div>
</header>
<section>
 <div align="center" id="Resultado">
    <p> <?php echo 'EL RESULTADO DE LA OPERACION ES: '.$Resultado; ?> </php>
 </div>
 </section>
</body>
</html>