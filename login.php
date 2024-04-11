<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Войти</title>
</head>
<body>
    <header class="header">
        <div class="continer">
            <ul class="list">
                <li class="list__item"><a href="http://localhost/Hahaton/index.html" class="list__link">Главаная</a></li>
                <li class="list__item"><a href="http://localhost/Hahaton/connect.php" class="list__link">Регистрация</a></li>
                <li class="list__item"><a href="http://localhost/Hahaton/login.php" class="list__link active">Войти</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="continer">
                <form class="form" action="login.php" method="post">
                    <input class="input" type="text" plaseholder="Логин" name="login" id="login">
                    <input class="input" type="text" plaseholder="Пароль" name="password" id="password">
                    <button type="submit">войти</button>
                </form>
            </div>
        </section>
    </main>
    <?php
        require "index.php";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = array_key_exists("login", $_POST) ? $_POST["login"] : null;
            $password = array_key_exists("password", $_POST) ? $_POST["password"] : null;
            $sql = "SELECT * FROM users WHERE `login` = '$username' AND `pass` = '$password'";
            $result = $db->query($sql);
            $user = $result->fetchALL();
            if(count($user)){
                $new_url = "main.html";
                header("Location: ".$new_url);
            }else{
                echo "<p>не верно</p>";
            }
        }
    ?>
</body>
</html>
