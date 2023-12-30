function send_otp(){
    let emailId = $('#email').val();
    let datatosend = {
      "email": emailId,
    }
    $.ajax({
      url: 'sendOtp.php',
      type: 'post',
      data: datatosend,
      success: function(response) {
        let jsonResponse = JSON.parse(response);
        console.log(jsonResponse);
        alert("Response from server: " + jsonResponse.status);
        
        let responseBox = $('.alert');
      responseBox.text("Here is your one-time verification code which is valid for 1 min " + jsonResponse.otp);

        if (jsonResponse.status === "Yes") {
           $('.second_box').show();
           $('.first_box').hide();

           $('.alert').show();
        }
     }
     
    });
  }

  function match_otp(){
    let otp = $('#otp').val();
    let datatosend = {
      "otp": otp,
    }
    $.ajax({
      url: 'otpverification.php',
      type: 'post',
      data: datatosend,
      success: function(response) {
        let result = JSON.parse(response);
        alert("Response from server: " + result.status);
      
        if (result.status === "Yes") {
          
          window.location.href = "home.php";
        } else {
          
          alert("Error: " + result.status);
        }
      }
      
     
    });
  }
