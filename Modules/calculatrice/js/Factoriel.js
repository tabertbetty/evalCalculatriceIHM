$(function() {
	$("#facto").click(function(){
	 var ecran= $('#result_calc').val();
	
	//je lance ma méthode au click sur le bouton factorielle
		$.ajax({
			url: 'CtrlCalcul/getFactoriel',
			type: 'POST',
			dataType: 'html',
			data: {
				valeur: ecran, 
			},
			async: true,
			success: function(result) {
				document.getElementById('result_calc').value=result;
			
			},
			error: function(result) {
				ajaxError(result);
	
			},
			complete: function(result) {
				// faire qq chose quand c'est fini
				console.log('fini');
			}
	
		});
	
	
	});
	});
