<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $location = htmlspecialchars($_POST['location']);
    $phone = htmlspecialchars($_POST['phone']);
    $type = htmlspecialchars($_POST['type']);


    $to = "zhandostezekbai2028@gmail.com";

    $subject = "From: $email";

    $body = "email: $email\n";
    $body .= "location: $location\n";
    $body .= "name: $name\n";  
    $body .= "phone: $phone\n"; 
    $body .= "type: $type\n"; 


    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    if(mail($to,$subject, $body,$headers)){
        header("Location: index.php");
        exit();
    }
    else{
        header("Location: index.php");
        exit();
    }

}