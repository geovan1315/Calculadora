<?php
$valoruno=$_POST['1er'];
$valordos=$_POST['2do'];


$opcion=$_POST['operaciones'];

$Resultado="Su resultado es:";

if($opcion == 'suma')
{
  $Resultado=($valoruno+$valordos);
}

else if($opcion == 'mult')
{
  $Resultado=($valoruno*$valordos);
}

else if($opcion == 'divs')
{
  $Resultado=($valoruno/$valordos);
}

else if($opcion == 'rest')
{
  $Resultado=($valoruno-$valordos);
}
else
{
 $Resultado=0;
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
    <p> <?php echo 'EL RESULTADO DE LA OPERACION ES: '.$Resultado; ?> </p>
 </div>
 </section>
</body>
</html>
