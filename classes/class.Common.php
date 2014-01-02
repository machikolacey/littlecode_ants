<?php
class Common {

	public function calcHealthMeter($roulette, $health_meter){
	  	
		$health_meter  = $health_meter - ($health_meter * $roulette/100);		
		return $health_meter  ;
	
	}

	public function checkSurvival($health_meter, $fatal_percent){
	
		if($health_meter < $fatal_percent){	
		    $health_meter = 0;
		}
		return $health_meter;
	}
	
	
	
	


}

?>