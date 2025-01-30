<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первый код в PHP</title>
</head>
<body>
    <h1>Этот код написан</h1>
    <ul>
    <a href="/text.php?message=Привет, мир!">Перейти туда-то</a>
    <?php
    
        for ($i = 1; $i <=10; $i++) {
            print("<li>Элемент № {$i}</li>");
        }
    ?>
    </ul>
</body>
</html>