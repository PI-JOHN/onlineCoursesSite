<?php

class SendMail
{
  public static function sendFeedback($email, $message)
  {
      $adminEmail = 'popo@mail.ru';
      $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
      $headers = "From: $email\r\nReplay-to: $email\r\n
      Content-type: text/html;charset=utf-8\r\n";
      return mail($adminEmail, $subject, $message);
  }
}
 ?>
