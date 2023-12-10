<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost", "vadikderka", "RnD_*_C0Pt3r", "vadikderka");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
    } else {
        // echo "Неправильное имя пользователя или пароль";
    }
    mysqli_close($conn);
}
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sign-in.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>


<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <i class="bi bi-door-open"></i>
            <h1 class="h3 mb-3 fw-normal">Вход в аккаунт</h1>
            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
                <label for="floatingInput"><i class="bi bi-person"></i> I Имя пользователя</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="password">
                <label for="floatingPassword"><i class="bi bi-lock"></i> I Пароль</label>
            </div>
            <button class="w-100 btn btn-lg mb-1" type="submit">Войти</button>
            <a class="w-100 btn btn-lg btnclose" href="index.html">На главную</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2023 RND COPTER</p>
        </form>
    </main>
</body>

</html>