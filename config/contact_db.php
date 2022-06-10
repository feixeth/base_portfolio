<?php
    $name ="";
    $number ="";
    $email ="";
    $dbconn = mysqli_connect('localhost','root','', 'contact_db', '3308') or die ('DBFAIL');
    $message[]="";
    $msg="";

if(isset($_POST['send'])){
        $name = mysqli_real_escape_string($dbconn, $_POST['name']);
        $number = mysqli_real_escape_string($dbconn, $_POST['number']);
        $email = mysqli_real_escape_string($dbconn, $_POST['email']);
        $msg = mysqli_real_escape_string($dbconn, $_POST['message']);};

    $selectmessage = mysqli_query($dbconn,"SELECT * FROM `contact_form` WHERE name='$name' AND number='$number' AND email='$email' AND message='$msg'") or die("DBFAIL");

    if(mysqli_num_rows ($selectmessage) > 0) {
        $message[]="Message already sent.";
    }
    else {
        mysqli_query($dbconn," INSERT INTO `contact_form`(name, number, email, message) VALUES('$name','$number','$email','$msg')") or die("DBFAIL");
        $message[]="Message successfully sent.";}
?>