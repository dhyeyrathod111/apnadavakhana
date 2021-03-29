

$("#member_details_form").validate({
    rules: {    
        
    },
    errorElement: 'p',
    submitHandler: function(form) {
        var form = $('#member_details_form')[0]; 
        var form_data = new FormData(form);
        $('#member_create_btn').prop('disabled', true);
        $.ajax({
            type: "POST",
            url: $(form).attr('action'),
            data: form_data,
            contentType: false,cache: false,processData:false, 
            success: response => {
                if (response.status == true) {
                    notify_success(response.message);setTimeout(()=> window.location.href = response.redirect_url , 2000);
                } else {
                    console.log(response);notify_error(response.message);
                }
                $('html, body').animate({ scrollTop: 0 }, 'slow');$('#member_create_btn').prop('disabled', false);
            },
            error: response => {
                $('html, body').animate({ scrollTop: 0 }, 'slow');$('#member_create_btn').prop('disabled', false);
                console.log(response);notify_error();
            },
        });
    }
});







