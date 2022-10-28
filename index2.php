<h2>EXO 5</h2>
<?php

$age= 42;

if ($age>18){
    echo 'Vous etes majeur';
} else{
    echo 'Vous etes mineur';
}
?>
<br><br>
<h2>EXO 5.1</h2>
<?php

$sexe='Homme';

if ($sexe == 'Homme'){
    echo 'Vous etes un homme de qualité';
} else{
    echo 'Vous etes femme';
}


?>
<br><br>
<h2>EXO 6</h2>
<?php

$budget = 1553.89 ;
$achats = 1554.76 ;    

if ($budget > $achats)
{
    echo 'budget permet de payer les achats.';

}
else{
    echo'Budget ne permet pas de payers les achats';
}

?>

<br><br>
<h2>EXO 7</h2>
<?php

$age = 12;
if ($age > 18 )
{
    echo 'Vous etes majeur';
} else{
    echo 'Vous etes mineur';
}


?>
<br><br>
<h2>EXO 8</h2>
<?php
$heure = 12;

if ($heure > 0 && $heure <=12){
    echo "l'heure est le matin";
}
else if ($heure > 12 && $heure <=20){
    echo "l'heure est l'après midi";

}
else if ($heure > 20){
    echo "l'heure est nuit";
}

?>





