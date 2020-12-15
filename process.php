<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contacts.php?error');
       }
       else
       {
           $to = "contact.gorillalogistics@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:contacts.php?success");
           }
       }
    }
    else
    {
        header("location:contacts.php");
    }
?>