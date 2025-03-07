<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $message = htmlspecialchars($_POST['text']);

    $to = "hello@bubblevan.gr";
    $subject = "=?UTF-8?B?" . base64_encode("Μήνυμα από το bubblevan.gr") . "?=";
    $body = "<html><body>";
    $body .= "<p><strong>Όνομα:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Αριθμός:</strong> $number</p>";
    $body .= "<p><strong>Μήνυμα:</strong><br>" . nl2br($message) . "</p>";
    $body .= "</body></html>";
    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


    if (mail($to, $subject, $body, $headers)) {
        echo "Το Email στάλθηκε με επιτυχία!";
    } else {
        echo "Αποτυχία Αποστολής.";
    }
} else {
    echo "Invalid request.";
}
?>