<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my php project</title>
</head>
<body>
  <h1> use checkbox to output user choice</h1>
    <br>
    <form action = "site.php" method = "post">
  <input type = "text" name = "students"/>
  <input type = "submit"/>
    </form>
    <?php
$grades = array("tabongue" => "bac c", "Takis" => "bac d", "Parker" => "bac F",);
     echo $grades[$_POST["students"]];
     ?>

</body>
</html>