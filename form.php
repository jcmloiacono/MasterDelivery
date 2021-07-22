<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefono = $_POST['telf'];
$num_persone = $_POST['nperson'];
$date = $_POST['date'];
$time = $_POST['time'];
$food = $_POST['food'];
$occasion = $_POST['occasion'];

$header = 'From: ' . $email . " \r\n";
$header.= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$messaggio = "Questo messaggio è stato inviato da" . $nome . ",\r\n";
$messaggio .= "Il suo E-Mail è" . $email . "\r\n";
$messaggio .= "La prenotazione sara per " . $num_persone . ",\r\n"
$messaggio .= "per il giorno " . $date . ",\r\n";
$messaggio .= "alle " . $time . ",\r\n";
$messaggio .= "Il suo cibo preferito è " . $food . ",\r\n";
$messaggio .= "e sarà per un " . $occasion . ",\r\n";

$per = 'info@masterdelivery.it';
$oggetto = 'Messaggio di prenotazione';

if (mail($per, $oggetto, utf8_decode($messaggio), $header))
echo "<script type='text/javascript'> alert ('Il tuo messaggio è stato inviato con successo');</script>";
echo "<script type='text/javascript'> windows.location.href ='https://masterdelivery.it/scarica';</script>";


?>