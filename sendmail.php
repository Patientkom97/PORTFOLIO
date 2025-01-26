<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "patientkom@gmail.com"; 
    $subject = "Nouveau message du formulaire de contact";
    $body = "Nom: $name\nTelephone: $phone\nEmail: $email\nMessage:\n$message";

 
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";


    if (mail($to, $subject, $body, $headers)) {
        echo "Email envoyé avec succès!";
    } else {
        echo "L'envoi de l'email a échoué.";
    }
}
?>
