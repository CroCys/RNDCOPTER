<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RND COPTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-lg container-nav mb-4">
        <nav class="navbar navbar-expand-lg rounded-3 dark fixed menu" id="navMenu">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">RND COPTER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="sign-in.php">Выйти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#about">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#service">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#order">Заказ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#team">Команда</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <?php
    $conn = new mysqli("localhost", "vadikderka", "RnD_*_C0Pt3r", "vadikderka");
    if ($conn->connect_error) {
        die("Ошибка соединения: " . $conn->connect_error);
    }
    $sql = "SELECT helicopter, customer, phone, email, message FROM orders";
    $result = $conn->query($sql);
    ?>
    <div class="container-lg mb-4">
        <table>
            <thead>
                <tr>
                    <th>Вертолет</th>
                    <th>Заказчик</th>
                    <th>Телефон</th>
                    <th>E-mail</th>
                    <th>Сообщение</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["helicopter"] . "</td>";
                        echo "<td>" . $row["customer"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["message"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Данные отсутствуют</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <footer class="py-3 dark">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3 ">
            <li class="nav-item"><a href="index.html" class="nav-link px-2">Главная</a></li>
            <li class="nav-item"><a href="index.html#about" class="nav-link px-2">О нас</a></li>
            <li class="nav-item"><a href="index.html#service" class="nav-link px-2">Услуги</a></li>
            <li class="nav-item"><a href="index.html#order" class="nav-link px-2">Заказ</a></li>
            <li class="nav-item"><a href="index.html#team" class="nav-link px-2">Команда</a></li>
        </ul>
        <p class="text-center">&copy; 2023 RND COPTER</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>