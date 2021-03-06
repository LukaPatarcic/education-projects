 $(document).ready(function () {
          var regex = {
                    name : /^[a-zA-Z0-9]{2,20}?$/ ,
                    email : /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i ,
                    phone : /^[0-9\-\/]{10,18}?$/ ,
                    password : /^[A-Za-z]*$/ ,
                    passwordStrong : /^[A-Za-z0-9]*$/
                  };
        $('input[name="username"]').keyup(function(event) {
          var val = $(this).val();
          if(val === ''){
            $(this).removeClass('is-invalid');
          }else if(!val.match(regex['name'])){
            $(this).addClass('is-invalid').removeClass('is-valid');
          }else{
            $(this).addClass('is-valid').removeClass('is-invalid');
          }
        });

        $('input[name="email"]').keyup(function(event) {
          var val = $(this).val();
          if(val === ''){
            $(this).removeClass('is-invalid');
          }else if(!val.match(regex['email'])){
            $(this).addClass('is-invalid').removeClass('is-valid');
          }else{
            $(this).addClass('is-valid').removeClass('is-invalid');
          }
        });
        $('input[name="password"]').keyup(function () {
            var val = $(this).val();
            console.log(val);
            if(val.length === 0){
                $('#passwordInfo').text('')
            }else if(val.length < 5){
                $('#passwordInfo').text('Weak').addClass('text-danger');
            }else if(val.match(regex['password']) && val.length > 10){
                $('#passwordInfo').text('Strong').addClass('text-warning').removeClass('text-danger');
            }else if(val.match(regex['passwordStrong']) && val.length > 12){
                $('#passwordInfo').text('Very Strong').addClass('text-success').removeClass('text-danger text-warning');
            }
        });
        $('input[name="passwordCheck"]').keyup(function () {
            var pswdCheck = $(this).val();
            var pswd = $('input[name="password"]');
            if(pswd.val() !== pswdCheck){
                $('#passwordCheckInfo').text('Passwords do not match');
            }else if(pswd.val() === pswdCheck){
                $('#passwordCheckInfo').text('Passwords match');
            }
        });

        $('form.sendMessage').submit(function (event) {
            event.preventDefault();

            var form = $('form.sendMessage');
            var formData = $(this).serialize();
            console.log(formData);
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function (value) {
                    form[0].reset();
                    $('div.result').text(value);
                    $('#chatArea').load('includes/viewMessages.inc.php');
                    $("#chatArea").animate({ scrollTop: $("#chatArea")[0].scrollHeight}, 1000);
                }
            });
        });

         var scroll = $('#chatArea');
         scroll.scrollTop(scroll.prop("scrollHeight"));


         function myTimer() {
             $('#chatArea').load('includes/viewMessages.inc.php');
             $('#activeUsers').load('includes/activeUsers.inc.php');
             setTimeout(myTimer, 2000);
             $("#chatArea").animate({ scrollTop: $("#chatArea")[0].scrollHeight}, 1000);
         }
         myTimer();


 });