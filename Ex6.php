<?php
echo "<br>\n
      <br>\n 6. Exten el codi per tal de, a més de la variable $i, treballar igual amb variables de tipus: coma flotant, booleana i cadena de caracters.
      <br>\n";
      $i = 1;
      $tipus_de_i = gettype( $i );
      echo "· La variable \$i
            conté el valor $i
            i és del tipus $tipus_de_i";
      echo "<br>\n";
      $i = 1.2;
      $tipus_de_i = gettype( $i );
      echo "· La variable \$i
            conté el valor $i
            i és del tipus $tipus_de_i";
      echo "<br>\n";
      $i = "Hola";
      $tipus_de_i = gettype( $i );
      echo "· La variable \$i
            conté el valor $i
            i és del tipus $tipus_de_i";
      echo "<br>\n";
      $i = True;
      $tipus_de_i = gettype( $i );
      echo "· La variable \$i
            conté el valor $i
            i és del tipus $tipus_de_i";
?>
