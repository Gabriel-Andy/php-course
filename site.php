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
     $index = 1;
     do {
       echo " I am number $index <br>";
       $index++;
       if($index == 6) {
         echo "I love this number";
       }
     }
     while($index < 6) 
     ?>

</body>
</html>