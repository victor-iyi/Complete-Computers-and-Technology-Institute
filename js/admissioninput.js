$(document).ready(function(){

//buttons and submit buttons effect
	$('#check-status').click(function(){
		$('#admission-status-input').show('slow', 'linear', function(){
			$('#check-status').attr('type', 'submit');
		});
	});

	$('#login').click(function(){
		$('#studentlogin').show('slow', 'linear', function(){
			$('#login').attr('type', 'submit');
		});
	});

	var addmission = 'JAMB Reg. No.';
	var matric = 'CNAS/2012/001';
	var matric_msg = 'Please enter your Matriculation Number';
	//textfield effects

	$('#studentlogin').attr('value', matric);

	$('#studentlogin').focus(function(){
		if($(this).val() == matric || $(this).val() == '' || $(this).val() == matric_msg){
			$(this).attr('value', '');
			$(this).css('background-color', '#EEEEEE');
			$(this).css('color', '#333333');
			$('#studentlogin-button').removeAttr('disabled');
		}
	}).blur(function(){
		if($(this).val() == ''){
			$(this).attr('value', matric_msg);
			$(this).css('background-color', '#FF0000');
			$(this).css('color', '#EEEEEE');
			$('#studentlogin-button').attr('disabled', 'disabled');
		}
		
	}) ;


	// $('#studentlogin').attr('value', matric).focusin(function(){
	// 	if($(this).val() == matric){
	// 		$(this).attr('value', '');

	// 	}		
	// }).blur(function(){
	// 	if($(this).val() == ''){
	// 		$(this).attr('value', matric)
	// 		$(this).css('background-color', '#FF0000');
	// 	}
	// });
	// $('#studentlogin').blur(function(){
	// 	$(this).attr('value', 'Matriculation Number');

	// });


	//datepicker
	$('#dob').datepicker({ 
		dateFormat: 'dd/mm/yy', 
		showButtonPanel: true, 
		showAnim: 'show',
		changeMonth: true,
		changeYear: true
		 });

	//student validation
	$('#studentlogin-button').click(function(){

	});


});