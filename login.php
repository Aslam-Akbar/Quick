<?php

 if(isset($_POST['submit_btn']))
 {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $message = $_POST['message'];
  $text = "Username : " . $name . "\n" . "\n" . "Email : " . $email ."\n" . "\n" .  "Phone Number : " . $phone . "\n" . "\n" .  "Address : " .$address . "\n" . "\n" .  "Message : " . $message . "\n" . "\n";
  $fp = fopen('accounts.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo '<script>alert("We Will Reach You Shortly")</script>';
echo("<script>window.history.back()</script>");

    }
fclose ($fp);    
}

?>