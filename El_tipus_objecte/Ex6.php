<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
$tipus_de_gd = gettype($tipus_de_d);
echo "La variable \$d
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d.";

      echo "<br>\n
            <br>\n 5.Seria interessant, ara que sabem que la variable és de tipus objecte, conèixer de quina classe és aquell objecte. Això ho podem fer amb la funció get_class().
            <br>\n Una pista: \$classe_de_d = get_class( \$d )
            <br>\n";
      echo "· El valor que devuelve gettype es $tipus_de_gd.";
?>
