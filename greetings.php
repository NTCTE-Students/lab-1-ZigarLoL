<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Привествуем!</title>
</head>
<body>
    <h1>Дружелюбный файл!</h1>
    <p>Этот файл - Дружелюбный. Попробуй заполнить форму ниже:</p>
    <form method="post">
        <input type="text" placeholder="Введите имя. . ." name="name" />
        <input type="submit" value="Поприветсвовать" />
    </form>
    <?php
        if (isset($_POST['name'])) {
            $greetings = htmlspecialchars(string: $_POST['name']);
            print("<p>Привет, {$greetings} </p>");
        }
    ?>
</body>
</html>