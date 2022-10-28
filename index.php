<h2>EXO 0</h2>

<?php

$Nom='Martin';
$anneeNaissance = 2000;

echo "Bonjour Mr " . $Nom; echo " vous avez " . 2015 - $anneeNaissance; echo " ans"; 
?>
<h2>EXO 1</h2>
<?php


echo " a _a	a_a	AAA ";

?>

<br><br>
<h2>EXO 2</h2>
<?php
   $note_maths = 15;
   $note_francais = 12;
   $note_histoire_geo = 9;
   $moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3;
   echo 'La moyenne est de ' . $moyenne . ' / 20.';
?>
<br><br>
<h2>EXO 3</h2>
<?php
   $prix_ht = 50;
   $tva = 20;
   $prix_ttc = ($prix_ht * (1+$tva));
   echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
?>
<br><br>
<h2>EXO 4</h2>
<?php
$test ="42";
var_dump($test)



?>
