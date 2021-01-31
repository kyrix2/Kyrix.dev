<?php 
session_start();
    if(isset($_POST['btn-send']))
    {
       $FirstName = $_POST['First-name'];
       $LastName = $_POST['Last-name'];
       $Email = $_POST['Email'];
       $Msg = $_POST['msg'];
       $Subject = 'Kyrix.dev - '.$FirstName." ".$LastName;
    
       if(empty($FirstName) || empty($LastName) || empty($Subject) || empty($Msg) || empty($Email))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "kefioussama85@gmail.com"; #Reciever Email

           if(mail($to,$Subject,$Msg,$Email,$FirstName))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>