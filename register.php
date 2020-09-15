<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];


    $subject = "Registratie coronamaatregelen";
    $message = "Registratie :\n\n
    Gegevens persoon:\n
    Naam: ".$fname." ".$lname."\n
    Mail: ".$mailFrom."\n
    Gsm-nummer: ".$phone."\n";

    $mailTo = "corona@pointfinal.gent";
    $headers = "From: ".$mailFrom;
    $txt = "Nieuwe registratie Point Final van ".$fname." ".$lname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: corona.html?mailsent");

}

?>