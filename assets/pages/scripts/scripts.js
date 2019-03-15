var Save = function() {

    //document.alert("hi");
    var handleSave = function() {
//        $("#edit_save").click(function(){
//            alert("hello");
//        });
        
    
        $('.edit-save-form').validate({
            errorElement: 'span',
            
            errorClass: 'help-block', 
            
            focusInvalid: false, 
            
            rules: {
                field_1: {
                    required: true,
                    
                },
                field_2: {
                    required: true,
                    email: true
                },
                
            },

            messages: {
                field_1: {
                    required: "name required"
                    
                },
                field_2: {
                    required: "email is required.",
                    email: "not valid"
                },
                
            },

            invalidHandler: function(event, validator) {   
                $('.alert-danger', $('.edit-save-form')).show();
            },

            highlight: function(element) { 
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            submitHandler: function(form) {
                error.hide();
                form[0].submit(); //if success calling ajax 
            }
        });
        
    }
    return {
        
        //main function to initiate
        init: function() {
            
            handleSave();
            
        }

    };

}();

jQuery(document).ready(function() {
    Save.init();
});