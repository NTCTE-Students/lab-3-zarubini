<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $numbers = [1, 2, 3, 4, 5];
        
        if (in_array(3, $numbers)) {
            print('Число "3" есть в массиве! ' . array_search(3, $numbers) .'-index');
        } else {
            print('Числа "3" нет в массиве...');
        }
    ?>
</body>
</html>