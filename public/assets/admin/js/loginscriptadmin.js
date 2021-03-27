$("#login-form").validate({
    rules: {    
        
    },
    errorElement: 'p',
    submitHandler: function(form) {
        var form = $('#login-form')[0]; 
        var form_data = new FormData(form);
        $.ajax({
            type: "POST",
            url: $(form).attr('action'),
            data: form_data,
            contentType: false,cache: false,processData:false, 
            success: response => {
                if (response.status == true) {
                    notify_success(response.message);
                } else {
                    console.log(response);notify_error(response.message);
                }
            },
            error: response => {
                console.log(response);notify_error();
            }
        });
    }
});