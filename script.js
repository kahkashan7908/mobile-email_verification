function send_otp(){
  var mobileEmail=$('#mobileEmail').val();
  var emailRegExp =/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
  var mobileRegExp = /^[6-9]\d{9}$/;
  if (mobileEmail.match(emailRegExp)) {
    $.ajax({
      url:"send_otp.php",
      type:'post',
      data:'email='+mobileEmail,
      success:function(result){
        if(result.charAt(result. length-1)==1){   
          $('#otpContainer').show();
          $('#emailContainer').hide();
        }
        if(result==0){
          $('#email-error').html('please enter valid email' .fontcolor("red"));
          
        }    
      }
    })  

  } else {
    if (mobileEmail.match(mobileRegExp)) {
      var ch = "send_otp";				
      $.ajax({
      url: "otp_process.php",
      method: "post",
      data: {mobileEmail:mobileEmail,ch:ch},
      dataType: "text",
      success: function(data){
        if (data == 'success') {
          $('#otpContainer').show();
          $('#emailContainer').hide();
        }else{
          $('#email-error').html('please enter valid mobile' .fontcolor("red"));

        }
      }

    });
}
  else{
    $('#email-error').html('Invalid Mobile or Email' .fontcolor("red"));
    }
  }
  
}
function submit_otp(){
  var mobileEmail=$('#mobileEmail').val();
  var emailRegExp =/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
  var mobileRegExp = /^[6-9]\d{9}$/;
  var otp=$('#otp').val();
  if (mobileEmail.match(emailRegExp)) { 
    $.ajax({
      url:"check_otp.php",
      type:'post',
      data:'otp='+otp,
      success:function(result){
        if(result==1){
          window.location='dashboard.php'
        }
        if(result==0){
          $('#otp-error').html('Please enter valid OTP' .fontcolor("red")); 
        }    
      }
    })
  } else {
    if (mobileEmail.match(mobileRegExp)) {
      var ch = "verify_otp";
      $.ajax({
        url: "otp_process.php",
        method: "post",
        data: {otp:otp,ch:ch},
        dataType: "text",
        success: function(data){
            if (data == "success") 
              window.location='dashboard.php'
            else
              $('#otp-error').html('Please enter valid OTP' .fontcolor("red")); 
        }
      });
}
  else{
    $('#email-error').html('Invalid Mobile or Email' .fontcolor("red"));
    }
  }
  
  
 
}