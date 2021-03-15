'use strict';
$(document).ready(function() {
    const _token = $("input[name=_token]").val();
    let dataString = '_token=' + _token;

    function sendNewsletter() {

       $('.send-newsletter').click(function(e){
           e.preventDefault();

           let email = $(this).attr('data-email');
           let name  = $(this).attr('data-name');
           dataString += '&email='+ email + '&name='+name;

            if (email != '') {
                $.ajax({
                    type: "POST",
                    url: "sendNewsletter",
                    data: dataString,
                    dataType: 'JSON',
                    success: function(result)
                    {
                        if (result) {
                            alert('Newsletter has been sent successfully.');
                        }

                    }
                });
            }

       })


   }

    sendNewsletter();

});
