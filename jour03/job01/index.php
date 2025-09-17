<?php
$tableau=array(200,204,173,98,171,404,459);
foreach($tableau as $valeur){
    if ($valeur%2==0){
        echo "$valeur est un nombre pair<br>";
    } else {
        echo $valeur . " est un nombre impair<br>";
    }
}