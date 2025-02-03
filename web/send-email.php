<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variablen aus dem Formular
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nachricht = $_POST['nachricht'];

    // Ziel-E-Mail-Adresse (deine E-Mail-Adresse)
    $to = "ilias.ir73@gmail.com";
    // Betreff der E-Mail
    $subject = "Neue Kontaktanfrage von $name";
    // E-Mail-Text
    $body = "Name: $name\nEmail: $email\n\nNachricht:\n$nachricht";
    // Header mit der Absenderadresse
    $headers = "From: $email";

    // E-Mail senden und Erfolg oder Fehler anzeigen
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Vielen Dank für Ihre Nachricht! Wir melden uns so schnell wie möglich bei Ihnen.</p>";
    } else {
        echo "<p>Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.</p>";
    }
} else {
    // Wenn das Formular nicht per POST übermittelt wurde
    echo "<p>Bitte füllen Sie das Formular aus, um uns zu kontaktieren.</p>";
}
?>
