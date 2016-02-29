$(function() {

    var currentUrl = $(location).attr('href');
    var parcialUrl = currentUrl.split('admin');

    var url = parcialUrl[0];
    var urlAdmin = url + 'admin/';

    $('#logOut').click(function() {

        $.post(urlAdmin + 'oauth/logout', {}, function() {
            window.location = urlAdmin + 'login';
        });
    });

    $('#loginForm').submit(function() {

        var user = $('#inputUser').val();
        var pass = $('#inputPass').val();
        var errorDiv = $('#loginError');
        errorDiv.hide();

        if(validadeString(user) && validadeString(pass))
        {
            var data = {'user': user, 'pass': pass};
            $.post(urlAdmin + 'oauth', data, function(response) {
                var data = JSON.parse(response);
                if(data.error == true)
                {
                    errorDiv.find('span').html(data.errorText);
                    errorDiv.slideDown();

                }
                else
                {
                    window.location = urlAdmin;
                }
            });
        }
        else
        {
            var error = 'Usuário e/ou senha inválido(s).';
            errorDiv.find('span').html(error);
            errorDiv.slideDown();
        }

        return false;
    });

    function validateEmail(email)
    {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function validadeString(string)
    {
       return string.match(/^[0-9a-zA-Z]{1,16}$/)
    }
});