$( document ).ready(function() {
    console.log( "ready!" );
});







$("#ragistrationform").validate({
    rules: {
    	contact_no:{
            required: true,
            phoneUS:true,
        },
        otp:{
        	required: true,
        }
    },
    messages: {
      
    },
    errorElement: 'p',
    submitHandler: function(form) {
      	var form = $('#ragistrationform')[0]; 
        var form_data = new FormData(form);
        $.ajax({
            type: "POST",
            url: $(form).attr('action'),
            data: form_data,
            contentType: false,cache: false,processData:false, 
            success: response => {
                if (response.status == true) {
                	$('#ragistrationform').html(response.html_form).attr('action',response.action_url);
                } else {
                	notify_error(response.message);
                }
            },
            error: response => {
              	console.log(response);notify_error();
            }
        });
    }
});