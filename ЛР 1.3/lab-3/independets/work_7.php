<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $lorem  = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, exercitationem!";
        $lor = explode(" ", $lorem);
        foreach ($lor as $word) {
            print($word . "<br>");
        }
    ?>
</body>
</html>