<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'shobhanakailsh8303@gmail.com';

  if( file_exists($php_email_form = 'assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } //else {
    //die( 'Unable to load the "PHP Email Form" Library!');
  //}

  $contact = new php_email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name1'];
  $contact->from_email = $_POST['email1'];
  $contact->subject = $_POST['subject1'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  $contact->smtp = array(
    'host' => 'gmail.com',
    'username' => 'shobhanakailash8303@gamil.com',
    'password' => 'shobh@n@2003',
    'port' => '587'
  );
  $contact->add_message( $_POST['name1'], 'From');
  $contact->add_message( $_POST['email1'], 'Email');
  $contact->add_message( $_POST['message1'], 'Message', 10);

  echo $contact->send();
?>
