<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $initials = $_POST['initials'];
    $message = $_POST['message'];
    $datetime = $_POST['time'];
    $timeslot = $_POST['timeslot'];
    $location = $_POST['location'];

    $subject = "Wall text van "." ".$fname." ".$lname." - ".$initials;
    $message = "Wall text gemaakt door ".$fname." ".$lname."!\n\n
    Gegevens persoon:\n
    Naam: ".$fname." ".$lname."\n
    Mail: ".$mailFrom."\n
    Bericht: ".$message."\n
    Initialen: ".$initials."\n
    Finaal bericht: ". $message . " - " .$initials ."\n";

    $mailTo = "reservations@pointfinal.gent";
    $headers = "From: ".$mailFrom;
    $txt = "Nieuwe wall text Point Final van ".$fname." ".$lname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: confirmWallText.html?mailsent");

}

?>