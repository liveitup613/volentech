$('#btnSend').click(function() {
    if (!$('#wf-form-Contact-Form').valid())
      return;
    $.ajax({
      url: base_url + 'api/sendEmail',
      type: 'post',
      data: {
        name: $('#name').val(),
        email: $('#email').val(),
        phone: $('#phone').val(),
        subject: $("#subject").val(),
        message: $('#message').val(),          
      },
      success: function(res) {
        var result = JSON.parse(res);
        if (result.success == true) {
            $('.error-message').hide();
            $('.success-message').show();
        }
        else {
            $('.success-message').hide();
            $('.error-message').show();
        }
      },
      error: function() {
            $('.success-message').hide();
            $('.error-message').show();
      }
    })
  });
