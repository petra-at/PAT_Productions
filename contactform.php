<?php

if(isset($_POST['submit'])&& !(empty($_POST["name"])) && !(empty($_POST["email"])) && !(empty($_POST["message"])))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "info@pat-productions.com";
    $subject = "New Enquiry - via PATProduction site";
    $headers="From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n" .$message;

    if(mail($to , $subject, $txt , $headers)){
        echo "<script language='javascript' type='text/javascript'>alert('Your message has been sent! ');</script>";
        echo "<meta http-equiv='refresh' content='1; URL=index.html'>";
    }
    else
    {
        echo "<script language='javascript' type='text/javascript'>alert('Email server issues! Please try again later, or email us directly.');</script>";
        echo "<meta http-equiv='refresh' content='1; URL=index.html'>";
    }
    
}

?>