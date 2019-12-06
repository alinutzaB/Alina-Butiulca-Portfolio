jQuery(function($) {
	$('#submitButton').click(function() {
		$.ajax({
			type:"POST",
			url:"http://alinab.info/contact.php",
			data:{
				'action':'contact',
				'contactName':$('#contactName').val(),
				'contactEmail':$('#contactEmail').val(),
				'contactMessage':$('#contactMessage').val()
			},
			dataType: 'json',
			success:function(returnedData) {
				console.log(returnedData);
				$('#contactForm input:text').each(function() {
					$(this).removeClass('required');
				});
				$('#contactForm textarea').removeClass('required');
				if(returnedData.error_message != '') {
					if(returnedData.element != '') {
						$('#' + returnedData.element).addClass('required');	
					}
					$("#message").html('<p>' + returnedData.error_message + "</p>");
				} else {
					$("#message").html('<p>' + returnedData.success_message + "</p>");
					$('#contactForm input:text').each(function() {
						$(this).val('');
					});
					$('#contactForm textarea').val('');
				}
			},
			error:function() {
				alert('This is a error function.');
			},
		});
		return false;
	});
});