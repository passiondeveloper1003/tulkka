(function ($) {
  "use strict";

  $('body').on('click', '#trigger', function (e) {
    e.preventDefault();
    const apiUrl = window.APP_URL == 'localhost' ? 'localhost:8000' : window.APP_URL;
    $('#trigger').addClass('d-none');
    $('#smscode-group').removeClass('d-none');
    $('#trigger').addClass('d-none');
    $('#submitlogin').removeClass('d-none');
    const email = $( "input[name*='username']").val();
    $.ajax({
      url: apiUrl + '/verifysms',
      type: 'POST',
      dataType: 'json',
      crossDomain:true,
      data: {email:email,_token:window.csrf},

    }).complete(function (response) {
      console.log(response);
    }).fail(function () {

    });

});



})(jQuery);
