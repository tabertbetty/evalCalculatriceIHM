<?php

class ModelCalcul{
   
    /// constructeur
     public function __construct(){
        
    }   
    //function pour calculer la cacine carré
   
    public function getRacine($racin){

      $Racine=sqrt($racin);
    return $Racine;
    
        
    }
        //function pour calculer la factoriel
        public function getFacto($x){
        
            $Fact = 1;
    for ($i=2; $i <= $x; $i++) {
        $Fact = gmp_mul($Fact, $i);
    }
    return $Fact;
        
    }
}
?>
