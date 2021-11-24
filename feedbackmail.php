<?php
    session_start();
    $mail="busstrack0@gmail.com";
    $text=$_POST["texts"];
    $feedback="Feedback";
    $user = $_SESSION['user'];
    $msg= "This feedback had been sent by the user $user  \n \n $text" ;
    
      if (mail($mail,$feedback,$msg)){
        header("Location: trackChildrenFeedbackSent.php");

    }
      else {
        header("Location: trackChildrenFeedbackNotSent.php");
      }
      
   
?>