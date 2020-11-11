jQuery(function ($) {

    jQuery.validator.addMethod("country", function (value, element) {
        return this.optional(element) || /^[^+]/.test(value);
    }, "Enter Number Without Country Code");
    jQuery.validator.addMethod("number", function (value, element) {
        return this.optional(element) || value.match(/^[1-9][0-9]*$/);
    }, "Please enter the number without beginning with '0'");

    jQuery.validator.addMethod("mobile", function (value, element) {
        return this.optional(element) || $(element).intlTelInput("isValidNumber");
    }, "Please enter a valid mobile number");

    jQuery.validator.addMethod("alphabets", function (value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
    }, "Please enter Alphabets only");

    jQuery.validator.addMethod("email", function (value, element) {
        return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
    }, "Please enter a valid email address.");

    jQuery.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    }, "Value must not equal arg.");



    if ($('#contact-form').length > 0) {
        $('#contact-form').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                lname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                visit_from:{
                    valueNotEquals: ""
                }
            },
            messages:
                {
                    visit_from:{
                        valueNotEquals: "Please select Option!"
                    }
                }
        });
    }

    if ($('#price-popup').length > 0) {
        $('#price-popup').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                visit_from:{
                    valueNotEquals: ""
                }
            },
            messages:
                {
                    visit_from:{
                        valueNotEquals: "Please select Option!"
                    }
                }
        });
    }

    if ($('#download-popup').length > 0) {
        $('#download-popup').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                visit_from:{
                    valueNotEquals: ""
                }
            },
            messages:
                {
                    visit_from:{
                        valueNotEquals: "Please select Option!"
                    }
                }
        });
    }

    if ($('#main-popup').length > 0) {
        $('#main-popup').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                visit_from:{
                    valueNotEquals: ""
                }
            },
            messages:
                {
                    visit_from:{
                        valueNotEquals: "Please select Option!"
                    }
                }

        });
    }


    if ($('#banner-form').length > 0) {
        $('#banner-form').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                visit_from:{
                    valueNotEquals: ""
                }
            },
            messages:
                {
                    visit_from:{
                        valueNotEquals: "Please select Option!"
                    }
                }

        });
    }

    if ($('#float-form').length > 0) {
        $('#float-form').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                visit_from:{
                    valueNotEquals: ""
                }
            },
            messages:
                {
                    visit_from:{
                        valueNotEquals: "Please select Option!"
                    }
                }
        });
    }

});
