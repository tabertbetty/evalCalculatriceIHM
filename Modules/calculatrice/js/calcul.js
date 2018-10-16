window.onload=init;

function init() {
	initialiser();
	
    $('input').each(function () {
    $(this).click(function () {
		var bouton = this.getAttribute('value');
		
		if (bouton =='C')
		{
			initialiser();
		}
		//to do : gerer le point pour qu'il ne s'affiche pas plusieurs fois!!!!
		//if (bouton =='.'){
		//}
		//**************

	
		if (bouton =='=')
		{
			 
			 try {

				var sum = eval(result);
				// tentative pour gérer les erreurs!!!
			   if (sum === ("Infinity") || sum === "undefined" || sum === "null" )
			   {document.getElementById('result_calc').style.borderColor = "red";
			   document.getElementById('result_calc').value=("Erreur");}
			  // {
				else {
				document.getElementById('result_calc').value = eval(result);
				document.getElementById('result_calc').style.borderColor = "green";
			   
			   }
			  //gestion des erreurs
			   } catch(error) {
				switch (error.name) {
					case 'SyntaxError':
					document.getElementById('result_calc').style.borderColor = "red";
					document.getElementById('result_calc').value=("Erreur");
						
						
						break;
					case 'EvalError':
					document.getElementById('result_calc').style.borderColor = "red";
					document.getElementById('result_calc').value ("Erreur");
					
						
						break;
					default:
					document.getElementById('result_calc').style.borderColor = "red";
					document.getElementById('result_calc').value("Erreur");
					
						
						break;
				}
			} 
			result = "";
		}

		
		else {
			if (bouton !=='C' && bouton !=='√' && bouton !=='!')
			{
			result = result + bouton;
		
			document.getElementById('result_calc').value = result;
			document.getElementById('result_calc').style.borderColor = "bleu";
			
			}
		}
		
	});
	  
},
 false);

}	
// remise de l'écran à l'état initial
function initialiser() {
	document.getElementById('result_calc').value='0';
	document.getElementById('result_calc').style.borderColor = "";
	result = "";
}



