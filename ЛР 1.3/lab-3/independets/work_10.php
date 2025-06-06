<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        tr:nth-child(odd) {
            background-color:rgb(218, 218, 218);

        }
       
    </style>
</head>
<body>
    <table>
    <?php 
        $array = [[1, 2], [3,4], [5,6], [7,8], [8,9]];
      
        foreach ($array as $i) 
        { 
            print('<tr>');
            
            foreach ($i as $v) {
                print("<td>$v</td>");
                // print $v;
            }
            print('</tr>');

        }
    ?>
    </table>
    
</body>
</html>