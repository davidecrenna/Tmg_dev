$( document ).ready( Tmg );

function Tmg(jQuery){
	console.log('Top Manager Group v2');
	console.log('Authors: Davide Crenna, Locoro Filippo');

	// Main Variables
	var today = new Date();
	var year = today.getFullYear();

	var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
	var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	
	if(w < 370){
		$('.btn-lg').removeClass('btn-lg').addClass('btn-md');
	}

	$( window ).resize(function() {
		h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		
		if(w < 370){
			$('.btn-lg').removeClass('btn-lg').addClass('btn-md');
		}
		else{
			$('.btn-md').removeClass('btn-md').addClass('btn-lg');
		}
	});

} // Treextreme