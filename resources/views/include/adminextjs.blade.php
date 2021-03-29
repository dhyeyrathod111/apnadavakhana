<script src="{{ asset('public/assets/admin/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('public/assets/admin/js/popper.min.js') }}"></script>
<script src="{{ asset('public/assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/assets/admin/js/main.js') }}"></script>
<script src="{{ asset('public/assets/admin/js/plugins/pace.min.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.validate.min.js') }}"></script> 

<script type="text/javascript">
    $.validator.addMethod("phoneUS", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 && phone_number.match(/^(\+?1-?)?(\([0-9]\d{2}\)|[0-9]\d{2})-?[0-9]\d{2}-?\d{4}$/);
    }, "Please specify a valid phone number");
    function notify_success(message) {
        let html_str = '<div class="alert alert-success text-center"><strong>'+ message +'</strong></div>';
        $('#alert_message').fadeIn();
        $('#alert_message').html(html_str).fadeOut(3000);
    }
    function notify_error(message = '') {
        if (message === '') {
            message = "Sorry, we have to face some technical issues please try again later."
        } 
        let html_str = '<div class="alert alert-danger text-center"><strong>'+ message +'</strong></div>';
        $('#alert_message').fadeIn();
        $('#alert_message').html(html_str).fadeOut(3000);
    }
</script>