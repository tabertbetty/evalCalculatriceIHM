<?php
session_start();
 //var_dump($_GET);
if(isset($_GET['c'])){
	if(isset($_GET['m']) && $_GET['m'] != "" ){
		$ctrl = new $_GET['c'];
		if(isset($_GET['a'])){
			$ctrl->$_GET['m']($_GET['a']);
		}else{
			$ctrl->$_GET['m']();
		} 
	}
	else{
		
		$ctrl = new CtrlCalcul;
		$ctrl->getCalcul();
	} 
}
else{
	$ctrl = new CtrlCalcul;
	$ctrl->getCalcul();
}


/* Mon premier git */

/**
 * chargement automatique des fichiers de Class
 * @param string $class_name
 */
function __autoload($class_name = ""){

	$modules = array(
		"Modules/calculatrice/",
		"."
		);

	$repertoires = array(
			"Ctrl/",
			"model/",
			"view/",
			"templates/",
			"js/",
			"css/"
		
	
	);
	foreach($modules as $module){
		foreach($repertoires as $repertoire){
			$file = "{$module}/{$repertoire}/{$class_name}.php";
			if(file_exists($file)){
				include_once($file);
			}
		}
	}
}
?>

