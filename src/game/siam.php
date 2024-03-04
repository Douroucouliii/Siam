<?php

#######################################
########## DEFINITION DU JEU ##########
#######################################

$lines = 5;
$columns = 5;

//Plateau de jeu
# 0 = case vide
# 1 = rocher
# 2 = elephant
# 3 = rhinoceros

$matrice = array();
for ($i = 0; $i < $lines; $i++) {
    $matrice[$i] = array();
    for ($j = 0; $j < $columns; $j++) {
        $matrice[$i][$j] = 0;
    }
}







?>