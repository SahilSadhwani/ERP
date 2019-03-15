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
                customer_id: {
                    required: true,
                    
                },
                customer_name: {
                    required: true
                },
                customer_address: {
//                    required: true,
//                    number: true,
                    
                },
                customer_email: {
//                    required: true,
//                    number: true,
                },
                customer_contact: {
                    required: true,
                    number: true,
                },
                gst_no: {
                    
                },
                
            },

            messages: {
                customer_name: {
                    required: "Customer name is required."
                    
                },
                customer_contact: {
                    required: "Contact no is required.",
                    number: "Contact no should be numeric only!",
                },
//                gst_rate: {
//                    required: "GST Rate is required.",
//                    number: "GST Rate should be numeric only!",
//                }
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