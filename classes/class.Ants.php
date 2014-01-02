<?php

class Ants {
	
	public	$inst_worker;
	public  $worker;
	public	$inst_queen;
	public  $queen;
	public	$inst_soldier;
	public  $soldier;
	public  $common;
		
     function __construct() {
	  $this->worker = new Worker();
	  $this->queen = new Queen();
	  $this->soldier = new Soldier();		
	}
	

	public function createAnts() {
		for ($i = 1; $i <= 10; $i++) {	
		 $this->inst_worker[$i] = 100;			 
		 $this->inst_queen[$i]  = 100;
		 $this->inst_soldier[$i]= 100;
		}
	}
	
	public function displayAnts($type, $array){
	
  
	   foreach($array as $i=>$health_meter){
			    if($i<10){
		  			 echo $i. "&nbsp;&nbsp;&nbsp;&nbsp;: ";
					}else{
		    		 echo $i. "&nbsp;&nbsp;: ";				
					}	
				
				if($health_meter > 0){
		             echo  $health_meter."<br />";
				}else{
	    			 echo  "<span class=\"dead\">DEAD</span><br />";				
				}
	   }

	   $_SESSION["inst_worker"] = $this->inst_worker;	   
	   $_SESSION["inst_queen"] = $this->inst_queen;	  	
	   $_SESSION["inst_soldier"] = $this->inst_soldier;
	}
	
	public function attackAnts($array=array(), $type){

	    foreach($array as $i=>$health_meter){
		   $health_meter = round($this->$type->Attacked($i), 2);
		  
		  switch($type){
		   case "worker":
		   $this->inst_worker[$i] = $health_meter;
		   break;	
		   case "queen":
		   $this->inst_queen[$i]  = $health_meter;
		   break;
		   case "soldier":
		   $this->inst_soldier[$i] = $health_meter;
		   break;		   
		  }
		}

	
	}


}

?>