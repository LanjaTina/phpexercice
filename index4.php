<h2>EXO 9.1</h2>
<Table border =1>
<?php
$x=0;
do{
$s= $x * 8;
  echo "<tr><th>" . "$x x 8 =" . $s . "</th></tr>" ;
  $x++;
} while ($x <= 10); 


?>
    </table>




<h2>EXO 9</h2>
<?php
$x=77000;
while ($x<=77999){
  echo "$x <br>" ;
  $x++; 
}

?>
<br><br>
<h2>EXO 10</h2>
<?php
$x=0;
for ($x=0;$x<=10;$x++){
$s= $x * 5;
  echo "$x x 5 =" . $s . "<br>" ;
};
?>
<br><br>
<h2>EXO 11</h2>
<?php

for($i = 1;$i <= 9;$i++) {
   for($k = 1;$k <= $i;$k++) {
      echo $i;
   }
   echo "<br>";
}

?>
<br><br>
<h2>EXO 12</h2>
<?php
$var = 0;
while ($var=20){
  echo $var;
}

?>