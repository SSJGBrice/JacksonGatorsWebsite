<!-- Success HTML -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jackson Gators | Return</title>
    <link rel="shortcut icon" href="img/gatoricon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="header">
    <header>
      <a href="index.html" class="home selected">Home</a>
      <a href="pics.html" class="links">Pictures</a>
      <a href="cuts.html" class="links">Times</a>
      <a href="coaches.html" class="links">Coaches</a>
      <a href="goal.html" class="links">Goal</a>
      <a href="join.html" class="links">Join</a>
      <a href="location.html" class="links">Location</a>
      <a href="contact.html" class="links">Contact</a> 
    </header>
    </div>
    <h1 class="title logoheader"><a href="index.html" class="title">Jackson Gators</a></h1>
    <h2 class="logoimg"><a href="index.html"><img src="img/logo.png" class="logoheader"></a></h2>
   <hr class="line">
    <div class="wrap">
        <h1 class="h1contact">Thank you for your message!</h1> 
        <h2 class="h1contact">Someone on the Jackson Gator staff will be contacting you soon.</h2>
      <br><br><br><br><br><br>
    </div>
    <footer class="footer">
        <ul class="grid">
         <li><a href="index.html" class="footerlinks">Home</a></li>
         <li><a href="pics.html" class="footerlinks">Pictures</a></li>
         <li><a href="cuts.html" class="footerlinks">Times</a></li>
         <li><a href="coaches.html" class="footerlinks">Coaches</a></li>
         <li><a href="goal.html" class="footerlinks">Goal</a></li>
         <li><a href="join.html" class="footerlinks">Join</a></li>
         <li><a href="location.html" class="footerlinks">Location</a></li>
         <li><a href="contact.html" class="footerlinks">Contact</a></li>
       </ul>
       <div class="footerInfo">
         <h2><a href="tel:731-343-5320">731-343-5320</a></h2>
         <h2>&copy 2017 Jackson Gators</h2>
       </div>
    </footer>
  </body>
</html>



<?php
 
if(isset($_POST['email'])) {
    $to = "corey.wyatt@students.jmcss.org";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = "Contact Form Submission";
    $message = $first_name . " " . $last_name . " at " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
   
   
    mail($to,$subject,$message);

}
   
?>
 

 
