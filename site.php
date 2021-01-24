<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my php project</title>
</head>
<body>
  
    <form action = "site.php" method = "get">
    firstname:<input type = "text" name = "firstName"/>
    <br>
    lastname:<input type = "text" name = "lastName"/>
    <br>
    age:<input type = "number" name = "age"/>
    <br>
    goal: <input type= "text" name = "goals"/>
    <br>
    <input type = "submit"/>
    </form>
    <br>
    <?php
      $firstName = $_GET["firstName"] = $_GET["firstName"];
      $lastName = $_GET["lastName"];
      $age = $_GET["age"] ;
      $goal = $_GET["goals"];
      echo "you firstname is $firstName ";
      echo "you lastname is $lastName";
      echo "you age is $age ";
      echo "you goal is $goal ";
      ?>

</body>
</html>