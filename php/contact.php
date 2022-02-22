<?php
//get data from form  
if(isset($_POST['send_message'])){
  $name = $_POST['name'];
  $email= $_POST['email'];
  $subject = $_POST['subject'];
  $message= $_POST['message'];
  //change the email address as yours
  $to = "afrimectg@mail.com";
  $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
  $headers = "From: " . $email;
  if($email!=NULL){
      mail($to,$subject,$txt,$headers);
  }
  //redirect
  header("Location:../index.html");
}
?>