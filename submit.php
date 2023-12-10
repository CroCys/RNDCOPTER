<?php
$dbhost = 'localhost';
$dbname = 'vadikderka';
$dbuser = 'vadikderka';
$dbpass = 'RnD_*_C0Pt3r';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    printf("Подключение к базе данных не удалось: %s
", mysqli_connect_error());
    exit();
}

$helicopter = mysqli_real_escape_string($conn, $_POST['helicopter']);
$customer = mysqli_real_escape_string($conn, $_POST['customer']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO orders (helicopter, customer, phone, email, message) VALUES ('$helicopter', '$customer', '$phone', '$email', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Данные успешно отправлены в базу данных!');</script>";
    echo "<script>location.href = 'index.html';</script>";
} else {
    echo "Ошибка при сохранении заказа: " . mysqli_error($conn);
}

mysqli_close($conn);
