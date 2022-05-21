var host = $("meta[name='host']").attr("content");  
var token = $("meta[name='csrf-token']").attr("content");  
let questionAttempt = [];
let ansCorrect = 0;
let ansWrong = 0;
let ansSkip = 0;

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
			$.getJSON(host+'/firstStep/'+name, function(response){
				$('#contentBlock').html(getWidget(response.question, response.options));
				questionAttempt.push(response.question.id);
			});
		});

	//Skip Step
		$(document).on('click', '#skipStep', function(){
			++ansSkip;
			if(questionAttempt.length < 10){
				$.post(host+'/skipStep', {'_token': token, 'questionAttempt': questionAttempt}, function(response) {
					$('#contentBlock').html(getWidget(response.question, response.options));
					questionAttempt.push(response.question.id);
				}, 'json');
			}else{
				$.post(host+'/getResult', {'_token': token, 'ansCorrect': ansCorrect, 'ansWrong':ansWrong, 'ansSkip':ansSkip}, function(response) {
					$('#contentBlock').html(getResult());
				}, 'json');
			}
		});

	//Next Step
		$(document).on('click', '#nextStep', function(){
			if (!$("input[name='option[]']:checked").val()) {
			   Swal.fire(
				  'Alert!',
				  'Please select any of these option first!',
				  'warning'
				)
			}else{	
				if(questionAttempt.length < 10){
					let questionId = $("input[name='question_id']").val();
					let selectedOption = $("input[name='option[]']:checked").val();
					console.log(questionId, selectedOption);
					$.post(host+'/nextStep', {'_token': token, 'question': questionId, 'option': selectedOption, 'questionAttempt': questionAttempt}, function(response) {
						if(response.is_right == 1){
							++ansCorrect;
						}else{
							++ansWrong;
						}
						$('#contentBlock').html(getWidget(response.question, response.options));
						questionAttempt.push(response.question.id);
					}, 'json');
				}else{
					$.post(host+'/getResult', {'_token': token, 'ansCorrect': ansCorrect, 'ansWrong':ansWrong, 'ansSkip':ansSkip}, function(response) {
						$('#contentBlock').html(getResult());
					}, 'json');
				}
			}
		});
});



//Get Question Widget
	function getWidget(question, options){
		var htmlData = '<div class="p-6">\n\
	    <div class="flex items-center">\n\
	        <input type="hidden" name="question_id" value="'+question["id"]+'">\n\
	        <div class="ml-4 text-lg leading-7 font-semibold"><strong>Q-'+(questionAttempt.length+1)+'): '+question["title"]+'</div>\n\
	    </div>\n\
	    <div class="ml-12">';
	    $.each(options, function(index, value){
	    	htmlData += '<div class="mt-2 mb-10 text-gray-600 dark:text-gray-400 text-sm">\n\
	            <input type="radio" name="option[]" value="'+value.id+'">&nbsp;'+value.title+'\n\
	        </div>';
	    });

	    htmlData +='<div class="flex items-center">\n\
		                <button type="button" id="skipStep" class="btn btn-default">Skip</button>&nbsp;&nbsp;\n\
		                <button type="button" id="nextStep" class="btn btn-primary">Next</button>\n\
		            </div>\n\
		    	</div>\n\
			</div>';

		return htmlData;
	}

//Get Result
	function getResult(){
		var htmlData = '<div class="p-6">\n\
			    <div class="flex items-center">\n\
			        <div class="ml-4 text-lg leading-7 font-semibold">Result</div>\n\
			    </div>\n\
			    <div class="ml-12">\n\
			        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">\n\
			            <h4>Correct Ans: '+ansCorrect+'</h4>\n\
			            <h4>Wrong Ans: '+ansWrong+'</h4>\n\
			            <h4>Skipped Ans: '+ansSkip+'</h4>\n\
			        </div>\n\
			        <div class="flex items-center">\n\
		                <a href="" class="btn btn-primary">Back to Home</a>\n\
		            </div>\n\
			    </div>\n\
			</div>';

		return htmlData;
	}