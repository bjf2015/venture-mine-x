/**
 * @author JKetelaar
 */
$(document).ready(function () {
    $('#signinform').on('submit', function (e) {
        $("#error-box-wrapper").hide();

        e.preventDefault();
        var emailValue = $("#email-signin").val();
        var password = $("#password-signin").val();

        $.post("actions.php?action=login",
            {
                email: emailValue,
                password: password
            },
            function (data, status) {
                if (data == "correct"){
                    location.reload();
                }else{
                    alert(data);
                }
            });
    });

    $('#signupform').on('submit', function (e) {
        $("#error-box-wrapper").hide();

        e.preventDefault();
        var emailValue = $("#email-signup").val();
        var password = $("#password-signup").val();
        var secondPassword = $("#password-second-signup").val();
        var firstName = $("#first_name-signup").val();
        var lastName = $("#last_name-signup").val();

        if (password != secondPassword) {
            showError("Passwords do not match");
        } else {
            $.post("actions.php?action=register",
                {
                    email: emailValue,
                    password: secondPassword,
                    first: firstName,
                    last: lastName
                },
                function (data, status) {
                    if (data == "correct"){
                        location.reload();
                    }else{
                        alert(data);
                    }
                });
        }
    });
});

function showError(message) {
    $("#error-box").text(message);
    $("#error-box-wrapper").show();
}