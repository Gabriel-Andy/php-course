<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my php project</title>
</head>
<body>
<h2>understand while loop</h2>



    <?php
    $number = array(25,35,23,22,55,23,24);
    for($i = 0; $i < count($number); $i++ ) {
      echo("this is number $number[$i] <br>");
    }
     ?>

</body>
</html>