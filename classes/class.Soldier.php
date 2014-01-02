<?php
class Soldier extends Common{
	
	private $health_meter;
	private $fatal_percent;
	public $common;
	
     function __construct() {
	  $this->fatal_percent    = 66.0;	  
	}
	
	public function Attacked($i){

		$this->health_meter = $_SESSION["inst_soldier"][$i];	 
		$this->Damage(rand(0, 80) );
		$this->health_meter=$this->checkSurvival($this->health_meter, $this->fatal_percent);	
		
		return $this->health_meter ;
	}
	
	public function Damage($roulette) {

		if($this->health_meter!=0){
		 $this->health_meter = $this->calcHealthMeter($roulette, $this->health_meter);
		}
		return $this->health_meter ;
		
	}


}
?>