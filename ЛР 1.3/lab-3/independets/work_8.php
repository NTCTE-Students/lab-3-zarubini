<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numbers = [1, 2, 4, 3, 5];
        sort($numbers);

        foreach ($numbers as $number) {
            print($number);
        }
        print("<br>" ."обраьный сортт ");
        rsort($numbers);

        foreach ($numbers as $number) {
            print($number);
        }
    ?>
</body>
</html>