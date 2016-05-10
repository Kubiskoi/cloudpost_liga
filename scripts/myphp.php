<?php


class Player{

	private $full_name;
	private $dci;
	private $sum;
	private $score_records= array();
	private $lvl;


	function __construct($full_name,$dci_and_score){
		$this->full_name = $full_name;
		$this->parse_dci_and_score_records($dci_and_score);
		$this->set_lvl();
	}


	private function parse_dci_and_score_records($dci_and_score){
		$pieces = explode(",", $dci_and_score);
		$this->dci = $pieces[0];
		$sum = 0;
		for ($i=1; $i < count($pieces); $i++) {
			$sum=$sum+intval($pieces[$i]);
			array_push($this->score_records,$pieces[$i]);
		}
		$this->sum = $sum;
	}

	private function set_lvl(){
		$this->lvl = " ";
		if($this->sum >= 20 && $this->sum < 30)$this->lvl = "&#9733";
		if($this->sum >= 30 && $this->sum < 40)$this->lvl = "&#9733 &#9733";
		if($this->sum >= 40 && $this->sum < 50)$this->lvl = "&#9733 &#9733 &#9733";
		if($this->sum >= 50 && $this->sum < 60)$this->lvl = "&#9733 &#9733 &#9733 &#9733";
		if($this->sum >= 60 )$this->lvl = "&#9733 &#9733 &#9733 &#9733 &#9733";
	}

	function get_name(){
		return $this->full_name;
	}

	function get_lvl(){
		return $this->lvl;
	}

	function get_score_records(){
		return implode(" ",$this->score_records);
	}

	function get_sum(){
		return $this->sum;
	}

}

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