<?php
session_start();

$ch = $_POST['ch'];

switch ($ch) {
	case 'send_otp':
			$num = $_POST['mobileEmail'];
			
			$otp = rand(100000,999999);
			$_SESSION['otp']  = $otp;

			$curl = curl_init();

			curl_setopt_array($curl, array(
		//CURLOPT_URL => "http://2factor.in/API/V1/293832-67745-11e5-88de-5600000c6b13/SMS/9911991199/4499",
		  CURLOPT_URL => "http://2factor.in/API/V1/30e4974b-5e70-11ed-9c12-0200cd936042/SMS/".$num."/".$otp."",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/x-www-form-urlencoded"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo 'success';
		}					
		break;
		case 'verify_otp':
				$user_otp = $_POST['otp'];
				$verify_otp = $_SESSION['otp'];

				if($verify_otp == $user_otp){

					echo "success";
				}
		break;

	default:
		# code...
		break;
}

?>