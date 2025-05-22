<?php
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password))
{
    header("Location: login.html");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !str_ends_with($email, "@sakarya.edu.tr"))
{
    header("Location: login.html");
    exit;
}

$expectedPassword = substr($email, 0, strpos($email, "@"));

if ($password === $expectedPassword) 
{
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
      <meta charset='UTF-8'>
      <title>Hoş Geldiniz</title>
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='bg-light'>
      <div class='container mt-5 text-center'>
        <h2>Hoşgeldiniz <span class='text-success'>$password</span></h2>
        <p class='mt-3'>Giriş başarılı.</p>
        <a href='index.html' class='btn btn-primary mt-4'>Ana Sayfa</a>
      </div>
    </body>
    </html>";
} 
else 
{
    header("Location: login.html");
    exit;
}
?>
