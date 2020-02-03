<?php
echo("Van welk getal wil je de faculteit weten?".PHP_EOL);
$num = readline();
$out = 1;
$i = 1;
while($i < $num){
    $out += $out * $i;
    $i++;
}
echo($out);

?>