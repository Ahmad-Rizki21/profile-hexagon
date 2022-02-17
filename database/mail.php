<?php

    $to = "ahmad2005rizki@gmail.com"; // replace this mail with yours
    $from = $_SERVER['PHP_SELF']." ".$_POST["email"];
    $fnama = $_POST["nama"];
    $email = $_POST["email"];
    $headers = "From: $from";
    $message = $_POST["pesan"];

    $body = "User Message \n";
    $body .= " \n\n\t Nama: ".$name;
    $body .= " \n\n\t Email: ".$email;
    $body .= " \n\n\t Pesan: ".$message;

    if(mail($to, $subject, $body, $headers)){
        echo '<label class="success">Sent your <b>e-mail.</b></label>';
    }else{
        echo '<label class="error">Something went wrong! please try again.</label>';
    }
?>