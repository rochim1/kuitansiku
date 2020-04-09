
var $password = $("#pwd1");
var $confirmPassword = $("#re-pwd1");
var $both = $("#pwd1,#re-pwd1");

// Hide hints by default on load

$both.next().hide();
// Check if entered password meets requirements (True or False)
function isPasswordValid() {
	return $password.val().length >= 8;
}

// Check if password fields match (True or False)
function arePasswordsMatching() {
	return $password.val() === $confirmPassword.val();
}

// Check if passwords are both valid and matching (True or False)
function canSubmit() {
	return isPasswordValid() && arePasswordsMatching();
}

// Hide hint if password valid, show if not valid
function passwordEvent() {
	if ( isPasswordValid() ) {
		$password.next().fadeOut();
	} else {
		$password.next().fadeIn();
		$confirmPassword.next().hide();
	}
}

// Hide hint if both password fields match, show if fields do not match
function passwordConfirmation() {
	if ( arePasswordsMatching() ) {
		$confirmPassword.next().fadeOut();
	} else {
		if (isPasswordValid() ) 
		{
			$confirmPassword.next().fadeIn(); 
		}
	} 
}

// Enable submit button when passwords are both valid and matching
function enableSubmit() 
{
	
	if (!canSubmit() || $("#notif").hasClass("red")) 
	{
		$(".tombol").prop("disabled","disabled");

	}
	else
	{
		$(".tombol").removeAttr("disabled");

	}
}

$password.focus(passwordEvent).keyup(passwordEvent).keyup(passwordConfirmation).keyup(enableSubmit);

$confirmPassword.focus(passwordConfirmation).keyup(passwordConfirmation).keyup(enableSubmit);

enableSubmit();
