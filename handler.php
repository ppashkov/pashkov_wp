<?php
mb_internal_encoding("UTF-8");
require('db.php');
require('tg.php');


$database = new Db();

$email = $_POST['email'];
$message = $_POST['message'];
$file = $_FILES['screen']['name'];
$postid = $_POST['postid'];

$database->query('INSERT INTO bugreport (email, message, file, postid) VALUES (:email, :message, :file, :postid)');
$database->bind(':email', $email);
$database->bind(':message', $message);
$database->bind(':file', $file);
$database->bind(':postid', $postid);

$database->execute();

if(isset($_FILES['screen'])){
    $errors = array();
    $file_name = $_FILES['screen']['name'];
    $file_size = $_FILES['screen']['size'];
    $file_tmp = $_FILES['screen']['tmp_name'];
    $file_type = $_FILES['screen']['type'];
    $expension = array("jpeg", "jpg", "png");

    if($file_size> 10097152){
        $errors[]= 'Не больше 10 мб';
    }

    if(empty($errors) == true){
        move_uploaded_file($file_tmp, "/mnt/D/MEGA/TM/pashkov.github.io/formimg/".$file_name);
        echo "Success";
    }else {
        print $errors;
    }
} 

tg_message::sendNotif($email,$message,$file, $postid);

?>