<?php 
  session_start();
	error_reporting(E_ALL);
 ini_set("display_errors", 1);
require_once ("html/header.php");

spl_autoload_register(function($class) {
	require_once "classes/class." . $class . ".php";
});


   $ants = new Ants();
    
   if(isset($_POST['submit'])){
   
	if(isset($ants -> inst_worker )){ $ants -> inst_worker = $_SESSION["inst_worker"];}
	 $ants -> inst_queen = $_SESSION["inst_queen"];
	 $ants -> inst_soldier = $_SESSION["inst_soldier"];
	 
	 $ants -> attackAnts($ants -> inst_worker, "worker");
	 $ants -> attackAnts($ants -> inst_queen, "queen");
	 $ants -> attackAnts($ants -> inst_soldier, "soldier");
    
	 require_once("html/display_ants.php");	 	 
	
   }else{

     $ants -> createAnts();
	 require_once("html/display_ants.php");	 
   }


   
 require_once ("html/footer.php");  

?>