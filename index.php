<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>User Signin</title>  
</head>
<body class="container-fluid">
    <form method="post">
        <div class="form-login">
            <div style="border: 1px solid black ; width: 300px; padding: 30px; background: rgb(243, 213, 234); margin-top: 60px;">
                <h2 style="text-align: center; margin-bottom:30px ;">OTP Log in</h2>
                <div id="emailContainer">
                    <label class="form-label"><b>Enter your Email or Mobile</b></label>
                    <div>
                        <input type="text" id="mobileEmail" class="form-control" name="email" placeholder="Enter here...">
                        <div id="email-error" style="font-size:20px;"></div>
                    </div>
                    <div style="margin-top: 10px;">
                        <button  type="button" onclick="send_otp()" class="btn btn-success w-100 mt-2" id="submit-email">Sent OTP</button>
                    </div>
                </div>
                <div id="otpContainer" style="display:none;">
                    <label class="form-label">Enter OTP</label>
                    <div>
                        <input type="text" id="otp" class="form-control" placeholder="Enter OTP" name="otp">
                        <div id="otp-error" style="font-size:20px;"></div>
                    </div>
                    <div style="margin-top: 10px;">
                        <button type="button" onclick="submit_otp()" class="btn btn-success w-100 mt-2" id="submit-otp">login</button>
                    </div>
                </div> 
            </div>
        </div>
    </form>
    <script src="script.js"></script>  
</body>

</html>