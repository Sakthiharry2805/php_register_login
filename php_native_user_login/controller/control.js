$(document).ready(function() {
    var actionemail = $('#form-register').attr('actionemail');
    var actionphone = $('#form-register').attr('actionphone');
    $("#form-register").validate({
        rules: {
            f_name: {
                required: true,
            },
            l_name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: actionemail,
                    type: "post",
                },
            },
            phone_no: {
                required: true,
                minlength: 10,
                number: true,
                remote: {
                    url: actionphone,
                    type: "post",
                },
            },
            password: {
                required: true,
                minlength: 5,
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#pass",
            }
        },
        messages: {
            // errorClass: 'errors',
            f_name: {
                required: "Please enter your first name!",
            },
            l_name: {
                required: "Please enter your last name!",
            },
            email: {
                required: "This field is require!",
                email: "Please provide valid email!",
                remote: "Email is already exists!",
            },
            phone_no: {
                required: "Please provide your mobile number!",
                number: "Only numbers are allowed!",
                minlength: "Your number is not valid!",
                remote: "Number is already exists!",
            },
            password: {
                required: "Please provide a password!",
                minlength: "Your password must be atleast 5 characters long",
            },
            confirm_password: {
                required: "Please provide a confirm password!",
                minlength: "Your password must be atleast 5 characters long",
                equalTo: "Please enter the same password as above!",
            }
        },
        // highlight: function(element) {
        //     $(element).addClass('error');
        // },
        // unhighlight: function(element) {
        //     $(element).removeClass('error');
        // },
        submitHandler: function(form) {
            $('#form-register').on('submit', function(e) {
                // $('#form-register').validate();
                var actionreg = $('#form-register').attr('action');
                var actionregafter = $('#form-register').attr('actionregafter');
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: actionreg,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        alert('User was register successfully');
                        $(location).attr('href', actionregafter);
                    }
                });
            });
        }
    });
});

// Register call !

// $(document).ready(function() {
//     $('#form-register').on('submit', function(e) {
//         // $('#form-register').validate();
//         var actionreg = $('#form-register').attr('action');
//         var actionregafter = $('#form-register').attr('actionregafter');

//         e.preventDefault();
//         $.ajax({
//             type: 'post',
//             url: actionreg,
//             data: new FormData(this),
//             contentType: false,
//             cache: false,
//             processData: false,
//             success: function(response) {
//                 alert('User was register successfully');
//                 $(location).attr('href', actionregafter);
//             }
//         });
//     });
// });

// Email validation call to check mail is already present!

// $(document).ready(function() {
//     $('#email').on('change', function() {
//         var email = $('#email').val();
//         $.ajax({
//             type: 'post',
//             url: '../validation/validationemail.php',
//             data: { "email": email },
//             success: function(data) {
//                 var res = $.parseJSON(data);
//                 if (res.status == 1) {
//                     $('#invalid_email').text("Email is already exists!");
//                     $('#submitbtn').attr('disabled', 'disabled');
//                 } else {
//                     $('#invalid_email').text("");
//                     $('#submitbtn').removeAttr('disabled');
//                 }
//             }
//         });
//     });
// });

// Password checking call to check the both pass are match!

// $(document).ready(function() {
//     $('#con_pass').on('change', function() {
//         var pass = $('#pass').val();
//         var con_pass = $('#con_pass').val();
//         $.ajax({
//             type: 'post',
//             success: function() {
//                 if (pass === con_pass) {
//                     $('#invalid_con_pass').text("");
//                     $('#submitbtn').removeAttr('disabled');
//                 } else {
//                     $('#invalid_con_pass').text("Password doesn't match!");
//                     $('#submitbtn').attr('disabled', 'disabled');
//                 }
//             }
//         });
//     });
// });

//  Login call !

$(document).ready(function() {
    $('#form-login').on('submit', function(e) {
        var actionlog = $('#form-login').attr('action');
        var actionlogafter = $('#form-login').attr('actionlogafter');
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: actionlog,
            data: $('#form-login').serialize(),
            success: function(data) {
                var res = $.parseJSON(data);
                if (res.status == 1) {
                    $('#invalid').text("");
                    $(location).attr('href', actionlogafter);
                    // $query1 = res.query;
                } else {
                    $('#invalid').text("Incorrect Email or Pass!");
                }
            }
        });
    });
});