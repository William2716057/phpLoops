
<?php  
//will result in 12345 and stop if less than 6
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 

echo "<br>"; //line break to print next code on new line

//break at 3
//will result in 1,2
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo $i;
  $i++;
} 

echo "<br>";
 //continue will cause code to continue after 3 resulting in 12456
$i = 0;

while ($i < 6) {
  $i++;
  if ($i == 3) continue;  
  echo $i;
} 

echo "<br>";
//while loop can also be written as endwhile
$i = 1;

while ($i < 6):
  echo $i;
  $i++;
endwhile;

echo "<br>";

//count up by number defined in loop
$i = 0;

while ($i < 200) {
  $i+=20;
  echo "$i<br>";
}

?>  
