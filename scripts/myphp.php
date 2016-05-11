<?php

include 'player.php';

$arr_of_players = array();

//read csv
$row = 1;
if (($handle = fopen("uploads/res2.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $row++;
        // if there is name add to player array, players without name are not relevant
        if( strlen($data[0]) > 0){
        	array_push($arr_of_players,new Player($data[0],$data[1]));
        }

    }
    fclose($handle);
}

function cmp($a, $b)
{
    return strcmp($a->get_name(), $b->get_name());
}

usort($arr_of_players, "cmp");

?>