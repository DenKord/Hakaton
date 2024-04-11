<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">    
    <title>Регистрация</title>
</head>
<body>
    <header class="header">
        <div class="continer">
            <ul class="list">
                <li class="list__item"><a href="http://localhost/Hahaton/connect.php" class="list__link active">Регистрация</a></li>
                <li class="list__item"><a href="http://localhost/Hahaton/login.php" class="list__link">Войти</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="continer">
                <form action="reg.php" method="post">
                    <input type="text" plaseholder="Логин" name="login" id="login">
                    <input type="text" plaseholder="Пароль" name="password" id="password">
                    <button type="submit">Отпарвить</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>