// $('input:empty, textarea:empty').addClass('empty');
//
// $('input').keyup(function () {
//     if ($(this).val().trim() !== '') {
//         $(this).removeClass('empty');
//     } else {
//         $(this).addClass('empty');
//     }
// });
//
//
// Input Scripts
(function () {
    var InputModifier = function (inputId) {
        var input = document.getElementById(inputId);

        if (input.validity.patternMismatch) {
            input.removeClass('form__input');
            console.log('Script invoked');
        }
    };

    var uname = new InputModifier('f-name');
    uname;
}());

