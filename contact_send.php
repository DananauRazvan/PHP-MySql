<?php
if(isset($_POST['submit'])){
    $msg = 'Name: ' .$_POST['name'] ."\n"
        .'Email: ' .$_POST['email'] ."\n"
        .'Comment: ' .$_POST['comment'];
    mail('razvandananau@gmail.com', 'Contact form', $msg);
    header('location: contact_thank_you.php');
}
else{
    header('location: contact.php');
}
?>