<?php
    $Name=$_POST["firstname"];
    $FamName=$_POST["lastname"];
    $mail="busstrack0@gmail.com";
    $mailsentfrom=$_POST["email"];
    $type=$_POST["Youare"];
    $Msg=$_POST["subject"];
    $subject="External message";
    $msg= "This feedback had been sent by $Name $FamName and he/she/it is a $type \n Email: $mailsentfrom \n \n \n $Msg";
    
    
      if (mail($mail,$subject,$msg)){
        header("Location: SupportSent.php");

    }
      else {
        header("Location: SupportSent.php");
      }
      
   
?>