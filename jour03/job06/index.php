<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$index = 0;
for ($i=0; isset($str[$i]); $i++){
    $index++;
}
for ($j=0; $j<$index; $j++){
    echo $str[$index - $j - 1];
}