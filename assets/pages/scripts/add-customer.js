var FormValidation = function () {
var handleValidation3 = function() {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation
//alert("");
            var add_customer_form = $('#add_customer_form');
            var error = $('.alert-danger', add_customer_form);

            add_customer_form.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "", // validate all fields including form hidden input
                rules: {
                    customer_name: {
                        required: true
                    },
                    customer_address:{
//                        required: true,
                
                    },
                    customer_email:{
//                        required: true,
                        email:true,
                
                    },
                    customer_contact:{
                        required: true,
//                        number: true,
                    },
                    gst_no:{
                        
                    }
                },

                messages: { // custom messages for radio buttons and checkboxes
                    customer_name:{
                        required: "Please insert customer name!"
                    },
                    customer_email:{
                        email: "Enter valid email",
                    },
                    customer_contact:{
                        required: "Please insert contact!",
                        number: "Conatact should be numeric only!",
                    },
//                    gst_rate:{
//                        required: "Please insert GST rate!",
//                        number: "GST rate should be numeric only!",
//                    },
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.parent(".input-group").size() > 0) {
                        error.insertAfter(element.parent(".input-group"));
                    } else if (element.attr("data-error-container")) { 
                        error.appendTo(element.attr("data-error-container"));
                    } else if (element.parents('.radio-list').size() > 0) { 
                        error.appendTo(element.parents('.radio-list').attr("data-error-container"));
                    } else if (element.parents('.radio-inline').size() > 0) { 
                        error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
                    } else if (element.parents('.checkbox-list').size() > 0) {
                        error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
                    } else if (element.parents('.checkbox-inline').size() > 0) { 
                        error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    error.show();
                    App.scrollTo(error, -200);
                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    error.hide();
                    form[0].submit(); // submit the form
                }

            });

             //apply validation on select2 dropdown value change, this only needed for chosen dropdown integration.
            $('.select2me', add_customer_form).change(function () {
                add_customer_form.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });

            //initialize datepicker
            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                autoclose: true
            });
            $('.date-picker .form-control').change(function() {
                add_customer_form.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input 
            })
    }
    return {
        //main function to initiate the module
        init: function () {
            handleValidation3();

        }

    };

}();
jQuery(document).ready(function() {
    FormValidation.init();
});