<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user-name'];
    $phone = $_POST['user-phone'];
    $email = $_POST['user_email'];
    $comment = $_POST['user-comment'];
    $privacy = isset($_POST['user-privacy']) ? 'Accepted' : 'Not Accepted';
    
    $to = "office@wordlaw.eu; koliaso@gmail.com"; // Замініть на свою електронну адресу
    $subject = "New Form Submission";
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Comment: $comment\n";
    $message .= "Privacy Policy: $privacy\n";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Дякуємо за ваше повідомлення!";
    } else {
        echo "Помилка при відправці повідомлення.";
    }
} else {
    echo "Дозволено лише POST-запити.";
}
?>
