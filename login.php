<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" plaseholder="Логин" name="login" id="login">
        <input type="text" plaseholder="Пароль" name="password" id="password">
        <button type="submit">Отпарвить</button>
    </form>
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
