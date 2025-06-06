<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Создание массива
        $colors = ['Красный', 'Зеленый', 'Синий'];

        // Добавление элемента в массив
        array_push($colors, 'Желтый');

        // Вывод технической информации о массиве
        var_dump($colors);

        // Удаление последнего элемента массива
        $lastColor = array_pop($colors);

        var_dump($colors);
    ?>
</body>
</html>