<?php

// first test if logged in as ruubikcms admin
session_name('cmslogin');
session_start();

if (@$_SESSION['uid']) {
	// logged in as ruubikcms admin, just pass
} else {
	//not logged in as ruubikcms admin, use regular extranet login
	@session_destroy();
	session_name('extralogin');
	session_start();
}

// logout after time in seconds
if(@$_SESSION['time'] < (time() - LOGOUT_TIME)) {
	
	// empty session array
	$_SESSION = array();
	// delete session cookie by setting time to past
	if(isset($_COOKIE[session_name()])) {
		@setcookie(session_name(), '', time() - 360000, '/');
	}
	@session_destroy(); 

} else {
// --- session valid, reset timer
	$_SESSION['time'] = time();
}
?>