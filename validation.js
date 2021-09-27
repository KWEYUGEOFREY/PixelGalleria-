<script>
  $(document).ready(function($) {
        
				$("#seller-form").validate({
                rules: {
                    uname: "required",                    
                    pass: {
                        required: true,
                        minlength: 6
                    },
                   city: "required",
                  gender: "required"
                 
                },
                messages: {
                    uname: "Please enter your Name",                   
                    pass: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                  city: "Please enter your city",
                  gender: "This field is required"
                },
                 errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.form-group') );
            }
            else 
            { 
                error.insertAfter( element );
            }
         },
                submitHandler: function(form) {
                    form.submit();
                }
                
            });
    });
	</script>