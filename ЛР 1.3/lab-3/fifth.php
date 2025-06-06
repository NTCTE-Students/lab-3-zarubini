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
        $numbers = [1, 2, 3, 4, 5];

        // Проверка наличия элемента в массиве
        if (in_array(3, $numbers)) {
            print('Число "3" есть в массиве!');
        } else {
            print('Числа "3" нет в массиве...');
        }
    ?>
</body>
</html>