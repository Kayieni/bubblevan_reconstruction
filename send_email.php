<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $message = htmlspecialchars($_POST['text']);

    $to = "hello@bubblevan.gr";
    $subject = "Μήνυμα από το bubblevan.gr";
    $body = "Όνομα: $name\nEmail: $email\nΑριθμός: $number\n\nΜήνυμα:\n$message";
    $headers = "Από: $email";
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