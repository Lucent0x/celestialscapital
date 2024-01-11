<?php
    $name = $_POST['name']??'';
    $email = $_POST['email']??'';
    $_message = $_POST['message']??'';
    
    if ( $name !== "" ){
         if ( $email !== "" ){
      
    if ( $_message !== "" ){
$to = "lighthaven63@gmail.com,mail.lucidity@gmail.com";
$subject = "Client Comment From celestialscapital.com";

$message = "
<html>
    <head>
        <title> Client Comment From celestialscapital.com</title>
    </head>
        <body>
             <p><i> From: $email </i></p>
             <p> <b> By:  $name </b>
                 <br>
                 <br>
                 <i> $_message </i>
            </p>
     </body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: message@celestialscapital.com' . "\r\n";
$headers .= 'Cc: message@celestialscapital.com' . "\r\n";
                                                
$mail = mail($to,$subject,$message,$headers);


 if ($mail){
     header("location:./index.html");
 }else{
     header("location:./contact.php?msg=failed");
 }
    }else{
        header("location:./contact.php?msg=no message");
    }
    }else{
        header("location:./contact.php?msg=no email");
    }
    }else{
        header("location:./contact.php?msg=no name");
    }   
    
     
?>