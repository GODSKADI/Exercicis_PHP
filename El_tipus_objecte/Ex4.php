<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d.";
echo "<br>\n
      <br>\n 4. Que retorna la invocació del mètode format de la classe datetime?
      <br>\n·Devuelve el dia actual.";

?>
