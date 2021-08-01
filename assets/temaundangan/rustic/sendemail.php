<?php

// Define some constants
define( "RECIPIENT_NAME", "John Doe" );         // Your Name Here
define( "RECIPIENT_EMAIL", "email@mail.com" ); // Your Email Here


// Read the form values
$success = false;
$userName = isset( $_POST['username'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$userEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$subject = isset( $_POST['events'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['events'] ) : "";
$guests = isset( $_POST['guests'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['guests'] ) : "";
$message = isset( $_POST['description'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['description'] ) : "";

// If all values exist, send the email
if ( $userName && $userEmail && $subject && $guests && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $userName . " <" . $userEmail . ">";
  $success = mail( $recipient, $subject, $guests, $message, $headers );

  //Set Location After Successfull Submission
  header('Location: index.html');
}

else{
	//Set Location After Error
  	header('Location: index.html');	
}

?>