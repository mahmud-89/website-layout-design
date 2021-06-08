<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "kingdrunk7@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    // mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    mail('you@yourmail.com','Test mail','The mail function is working!');
    echo 'Mail sent!';
    
    header('Location: http://www.website.byethost13.com/success.html');
    
  }
?>