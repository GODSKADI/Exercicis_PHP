<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d.";

      echo "<br>\n
            <br>\n 5. Prova a modificar el codi per a intentar mostrar \$d tal com ho feiem a l'exercici anterior.
            <br>\n
            <br>\nHa funcionat?
            <br>\n·Si, hay que darle un formato de tipo fecha para que funcione.
            <br>\n ·\$d->format('d/m/y')";
      echo "<br>\n
            <br>\n·Ejemplo:
            <br>\n·El valor de \$d és ".$d->format("d/m/Y") .".";

?>
