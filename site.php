<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my php project</title>
</head>
<body>
  
    <form action = "site.php" method = "get">
    username:<input type = "text" name = "username"/>
    <input type = "submit"/>
    </form>
    <br>
      your username is :<?php echo $_GET["username"]?>

</body>
</html>