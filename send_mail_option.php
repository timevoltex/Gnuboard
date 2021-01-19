<?php
$name_01 = $_POST['name'];
$mail_02 = $_POST['mail_add'];
$head_03 = $_POST['Mheader'];
$message_04 = $_POST['message'];
$optionValue = "From: $name_01<$mail_02>\r\n";

$to = 'help@connple.com';
$subject = $head_03;
$msg = "$message_04";
$_POST = array();

$sendmail = mail($to, $subject, $msg, $optionValue);


if (!$sendmail) {
  //echo "<script>alert('메일 발송에 실패 했습니다.');  history.back();</script> Mailer Error: " . $mail->ErrorInfo;
  echo "<script>alert('메일 발송에 실패 했습니다.');  history.back();</script>";
} else {
  echo "<script>alert('메일이 발송 되었습니다.');  history.back();</script>";
}
