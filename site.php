<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my php project</title>
</head>
<body>
  
    <form action = "site.php" method = "get">
    num1:<input type = "number" name = "num1"/>
    <br>
    num2:<input type = "number" name = "num2"/>
    <br>
    num3:<input type = "number" name = "num3"/>
    <br>
    <input type = "submit"/>
    </form>
    <br>
      your answer :<?php echo $_GET["num1"] * $_GET["num3"] + $_GET["num3"] ?>

</body>
</html>