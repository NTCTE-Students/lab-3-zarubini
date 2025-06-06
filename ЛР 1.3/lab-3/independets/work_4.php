<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numbers = [1, 2, 3, 4, 5, 3, 3, 2, 5, 6, 1];
        $numbers = array_unique($numbers);
        foreach ($numbers as $number) {
            print($number);
        }
    ?>
</body>
</html>