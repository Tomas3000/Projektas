<?php
if (isset($_POST['submit'])){
include('db.php');
$vardas = $_POST['vardas'];
$email = $_POST['email'];
$message = $_POST['message'];

if(!empty($vardas) && !empty($email) && !empty($message)){
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
     $from = "$email";
     $to = "petrauskiukstomulis@gmail.com";
     $subject = "nauja zinute";
     $autorius = 'nuo:' . $vardas . ',' . $email;
     $zinute = htmlspecialchars($message);
    //  CIA EMAIL SIUSTI ZEMIAU:
    //  mail($to, $subject, $autorius, $zinute, $from);
    //  echo "<script>alert('Dekojam.Jusu zitune gauta.')</script>";
  }               
}
}

?>