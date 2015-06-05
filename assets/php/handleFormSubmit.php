<?php

if(isset($_POST['c_name'])){

  $to = "khanna.shivangi@gmail.com";
  $from = $_REQUEST['c_email'];
  $name = $_REQUEST['c_name'];
  $headers = "From: $from";
  $subject = "[ACTION REQUIRED] Tutoring Request";

  $fields = array();
  $fields{"name"} = "c_name";
  $fields{"email"} = "c_email";
  $fields{"message"} = "c_message";

  $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

  $send = mail($to, $subject, $body, $headers);
  $res['sendstatus'] = 1;
  $res['message'] = 'Form Submission Succesful';
  echo json_encode($res);
}

?>
