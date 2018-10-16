$(function() {
$("#racineCarre").click(function(){
 var ecran= $('#result_calc').val();
 //console.log(ecran);
//je lance ma méthode au click sur le bouton racine carrée
	$.ajax({
        url: 'CtrlCalcul/getRacinecarre',
		type: 'POST',
        dataType: 'html',
        data: {
			valeur: ecran, 
		},
		async: true,
		success: function(result) {
			document.getElementById('result_calc').value=result;
			//$('#result_calc').html(result);
			
            console.log(result);
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
