<?php
// $post = $_POST['formSubmit'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $terms = $_POST['terms'];


    $headers = "MIME-Version: 1.0\n"; 
    $headers .= "Content-type: text/html; charset=utf8\n"; 
    $headers .= "From: javierlopez.design <hello@javierlopez.design>\n";

    $mailBody = " Hi! new contact from the website javierlopez.design > ". $email;
    $mailBody .= "\nName: " . $name;
    $mailBody .= "\nPhone: " . $phone;
    $mailBody .= "\nEmail: " . $phone;
    $mailBody .= "\nTerms acepted?: " . $terms;
    $mailBody .= "\nMessage: " . $message;

    // $EmailTo="hello@javierlopez.design";
    $EmailTo="jlog80@gmail.com";

    $Subject="New contact!";

    // send email 
    $success = mail($EmailTo, $Subject, $mailBody, $headers);


    $output = array(
        "name" => "$name",
        "email" => "$email",
        "phone" => "$phone",
        "message" => "$message",
        "terms" => "$terms"
        
    );
    $output = json_encode($output);
    die($output);
}
else{

    $output = array(
        "error" => "Nop post detected"
    );
    $output = json_encode($output);
    die($output);
    
}




?>