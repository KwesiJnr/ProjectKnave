// /**
//  * Created by Kwesi GREYBACK on 3/15/2017.
//  */
// $('input:empty, textarea:empty').addClass('empty');
//
// $('input').keyup(function () {
//     if ($(this).val().trim() !== '') {
//         $(this).removeClass('empty');
//     } else {
//         $(this).addClass('empty');
//     }
// });


$('form input').on('keypress', function (e) {
    return e.which !== 13;
});

/**
 * -----------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * Label Styling
 * -----------------------------------------------------------------------------------------------------------------------------------------------------------------------
 */
$('input:empty, textarea:empty').closest('label').addClass('empty');

$('input').keyup(function () {
    if ($(this).val().trim() !== '') {
        $(this).closest('label').removeClass('empty');
    } else {
        $(this).closest('label').addClass('empty');
    }
});


// Password Validation
$(document).ready(function () {
    $("button[type=submit]").prop('disabled', true);
    $('form').keyup(function () {
        $("button[type=submit]").prop('disabled', this.value == "");
    })
});

var password = document.getElementById("pass")
    , confirm_password = document.getElementById("pass_conf");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords don't match");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;