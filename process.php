<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Phone = $_POST['phone'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Phone) || empty($Msg))
       {
           header("location: contactus.php?error");
       }
       else
       {
           $to = "mhuynk1005@gmail.com";

           if(mail($to,$Phone,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:contactus.php");
    }



?>