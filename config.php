<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Create DB connection
    $conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_DATABASE']);

    // Stripe
    \Stripe\Stripe::setApiKey($_ENV['STRIPE_KEY']);


# $mail = new PHPMailer(true); // Enable exceptions
# 
# // SMTP Configuration
# $mail->isSMTP();
# $mail->Host = $_ENV['SMTP_HOST'];
# $mail->SMTPAuth = true;
# $mail->Username = $_ENV['SMTP_USERNAME'];
# $mail->Password = $_ENV['SMTP_PASSWORD'];
# $mail->SMTPSecure = 'tls';
# $mail->Port = $_ENV['SMTP_PORT'];