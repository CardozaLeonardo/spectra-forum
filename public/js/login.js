$(document).ready(function () {
    $(".user-signup-btn").click(function () {
        $("#Register-Form").fadeIn(1500);
        $('#user-login-btn').show();
        $('#Login-Form').hide();
        $('#user-signup-btn').hide();
        $("#caption-btn-NA").text('LOGIN IN');
    });
    $(".user-login-btn").click(function () {
        $('#Register-Form').hide();
        $('#user-login-btn').hide();
        $("#Login-Form").fadeIn(1500);
        $('#user-signup-btn').show();
        $("#caption-btn-NA").text('CREATE NEW ACCOUNT');
    });
});
