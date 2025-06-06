<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Создание ассоциативного массива
        $person = [
            'name' => 'Иван',
            'age' => 25,
            'city' => 'Москва'
        ];

        // Второй массив для перевода на русский язык ключей
        $translate = [
            'name' => 'Имя',
            'age' => 'Возраст',
            'city' => 'Москва',
        ];

        // Вывод элементов ассоциативного массива
        foreach($person as $key => $value) {
            print("{$translate[$key]}: {$value}<br>");
        }
    ?>

</body>
</html>