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
                category_id: {
                    required: true,
                    
                },
                category_name: {
                    required: true
                },
                hsn_code: {
                    required: true,
                    number: true,
                    
                },
                gst_rate: {
                    required: true,
                    number: true,
                }
            },

            messages: {
                category_name: {
                    required: "Category name is required."
                    
                },
                hsn_code: {
                    required: "HSN Code is required.",
                    number: "HSN Code should be numeric only!",
                },
                gst_rate: {
                    required: "GST Rate is required.",
                    number: "GST Rate should be numeric only!",
                }
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