<!-- ============================= Start Php Contact ============================= -->

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $myEmail = "ameurgh1@gmail.com";

    mail($myEmail, $name, $email, $subject, $message);
?>

<!-- ============================= End Php Contact ============================= -->