<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = 'webit.germany@gmail.com';
  $subject = 'Websitebestellung';
  $message = '';

  foreach ($_POST as $key => $value) {
    $message .= $key . ': ' . $value . "\r\n";
  }

  $headers = 'From: your-email@example.com' . "\r\n" .
             'Reply-To: your-email@example.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo 'Form submission successful.';
  } else {
    echo 'Form submission failed.';
  }
}
?>
