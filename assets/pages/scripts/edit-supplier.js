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
                supplier_id: {
                    required: true,
                    
                },
                supplier_name: {
                    required: true
                },
                supplier_address: {
//                    required: true,
//                    number: true,
                    
                },
                supplier_contact: {
                    required: true,
                    number: true,
                },
                supplier_email: {
//                    required: true,
//                    number: true,
                },
                gst_no: {
                    
                },
                
            },

            messages: {
                supplier_name: {
                    required: "Supplier name is required."
                    
                },
                supplier_contact: {
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