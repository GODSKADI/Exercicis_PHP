<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d.";
echo "<br>\n
      <br>\n 2. De quin tipus és la variable ". $d->format("d/m/Y")." ?
      <br>\n·Es de tipo objeto.";

?>
