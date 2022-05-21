var host = $("meta[name='host']").attr("content");  

$(document).ready(function(){
	'use strict'

	//First  Step
	$(document).on('click', '#firstStep', function(){
		var name = $('#username').val();
		if(!name){
			Swal.fire(
			  'Alert!',
			  'Please type your name first!',
			  'warning'
			)
		}
		$.getJSON(host+'/firstStep/'+name, function(resposne){
			console.log(resposne);
		});
	});
});