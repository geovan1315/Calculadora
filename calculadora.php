<?php
$valoruno=$_POST['1er'];
$valordos=$_POST['2do'];
$valortres=$_POST['3ro'];

$opcion=$_POST['operaciones'];

if($opcion == 'suma')
{
 $valortres=($valoruno+$valordos);
}

else if($opcion == 'mult')
{
 $valortres=($valoruno*$valordos);
}

else if($opcion == 'divs')
{
 $valortres=($valoruno/$valordos);
}

else if($opcion == 'rest')
{
 $valortres=($valoruno-$valordos);
}

?>
<html>

 <head>
  <link rel="stylesheet" type="text/css"href="diseño.css" />
 </head>
   <body>
    <header>
        <div align="center" id="RESULTADO">
            <h1> RESULTADO</h1>
        </div>
    </header>

    <section>

        <div align="center" id="Mostrar">
            <p> <?php echo $valortres; ?> </p>
        </div>
    </section>
    </body>
</html>