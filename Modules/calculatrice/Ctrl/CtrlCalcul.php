<?php 


class CtrlCalcul{
    
    private $view;
    private $model;
 

    
     // constructeur
     public function __construct(){
        // rappel:$this pour appeler view et modelde l'exterieur de la methode
       $this->model = new ModelCalcul();
         $this->view = new ViewCalcul();
         
        
        } 
        //je renvoie la calculatrice à la vue
        public function getCalcul(){
           $this->view->affichCalcul();
     }
    
     //je vaisrécupérer les données de l'écran (post) et traiter le calcul de la racine carrée  
     public function getRacinecarre(){
      if(isset($_POST['valeur']) && !empty($_POST['valeur'])){
            
        $racine = htmlspecialchars($_POST['valeur']);
        
        echo $this->model->getRacine($racine);
        
    }
             
  }
  //je vais récupérer les données de l'écran (post) et traiter le calcul  factorielle 
  public function getFactoriel(){
    if(isset($_POST['valeur']) && !empty($_POST['valeur'])){
            
      $Factoriel = htmlspecialchars($_POST['valeur']);
        
  echo $this->model->getFacto($Factoriel);

}
}
}

?>
