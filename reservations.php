<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $nr = $_POST['selectionNr'];
    $datetime = $_POST['time'];
    $timeslot = $_POST['timeslot'];
    $location = $_POST['location'];

    $subject = "Reservatie voor ".$datetime;
    $message = "Reservatie gemaakt door ".$fname." ".$lname." voor ".$nr." personen op ".$datetime." - ".$timeslot." !\n\n
    Gegevens persoon:\n
    Naam: ".$fname." ".$lname."\n
    Mail: ".$mailFrom."\n
    Gsm-nummer: ".$phone."\n
    Datum: ".$datetime."\n
    Tijdslot: ".$timeslot."\n
    Aantal personen: ".$nr . "\n
    Voorkeurslocatie: " . $location;

    $mailTo = "reservations@pointfinal.gent";
    $headers = "From: ".$mailFrom;
    $txt = "Nieuwe reservatie Point Final van ".$fname." ".$lname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: confirmReservation.html?mailsent");

}

?>