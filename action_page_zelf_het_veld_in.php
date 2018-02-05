<?php
//buttons
$email = (isset($_POST["email"])) ? $_POST["email"] : "" ;
$firstname = (isset($_POST["firstname"])) ? $_POST["firstname"] : "" ;
$personen = (isset($_POST["personen"])) ? $_POST["personen"] : "" ;
$maand = (isset($_POST["maand"])) ? $_POST["maand"] : "" ;

require 'php_action/mailer.php';




$to = $email;   // Hier het email adres waarnaar verstuurd word.(In dit geval wordt het ingevoerde e-mail uit het contact vormulier gebruikt)
$subject = "excursie: Zelf het veld in? Aspergeboerderij Sandur"; // Onderwerp

$message = '<html><body>';
$message .= 'Beste ' . "$firstname";
$message .= '<p>
U heeft zich aangemeld voor de excursie: Zelf het veld in?
</p>';

$message .= 'U heeft zich aangemeld met: ' . "$personen";
$message .= '<br>';
$message .= 'Op datum: ' . "$maand";
$message .= '<br>';
$message .= 'U krijgt hiervan nog een bevestiging';

$message .= '<p style="color:black;">Voor bestellingen kunt u het volgende e-mailadres gebruiken: bestellen@aspergeboerderijsandur.nl</p>';
$message .= '<a href="https://www.asperge.jorisgengler.nl"><img style="width: 310px; height: auto;  " src="https://www.asperge.jorisgengler.nl/images/logo.png"></a>';
$message .= '<p>Vaart N.Z. 186</br>7833 HJ Nieuw Amsterdam</br>Tel. 0591-554375</br>E-mail: info@aspergeboerderijsandur.nl</br></p>';
$message .= '<a href="https://www.facebook.com/AspergeboerderijSandur/"><img src="https://www.asperge.jorisgengler.nl/images/facebook.png"></a>';
$message .= '<a href="https://www.instagram.com/aspergeboerderijsandur/"><img src="https://www.asperge.jorisgengler.nl/images/instagram.png"></a>';

$message .= '</body></html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: aspergeboerderijsandur <nieuwsbrief@aspergeboerderijsandur.nl>' . "\r\n";

sendMail($to, $subject, $message, $headers); //send mail

//------------------------------ after zend ------------------------------//
    // header("Location: ../Nieuwsbrief.php");

?>
