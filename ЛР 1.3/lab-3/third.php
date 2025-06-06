<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Создание многомерного массива
        $students = [
            [
                'name' => 'Алексей',
                'age' => 22,
            ],
            [
                'name' => 'Мария',
                'age' => 20,
            ],
            [
                'name' => 'Дмитрий',
                'age' => 23,
            ],
        ];

        // Второй массив для перевода на русский язык ключей
        $translate = [
            'name' => 'Имя',
            'age' => 'Возраст',
        ];

        // Вывод элементов многомерного массива
        foreach($students as $student) {
            foreach($student as $key => $value) {
                print("{$translate[$key]}: {$value}");
            }
            print('<br>');
        }
    ?>
</body>
</html>