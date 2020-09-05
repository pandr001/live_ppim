<?php
function reset_password($data){
	$email = $data['EmailAdd'];
	$subject = "Reset Password";
	$comment = "
		Hi ".ucwords(strtolower($data['LoginName'])).",

		Please click the address below to reset your ".SYSTEM_NAME." account password.

		".URL."user/reset_password/".e($data['ID'])."

		If you did not request a password reset please disregard this email.

		Thanks,
		PPIM Team
	";
	if(mail($email, $subject, $comment)){
		echo "We’ve just sent an email to your address: ".$email."<br>";
	}
}
?>