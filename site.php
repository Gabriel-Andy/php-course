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
    orange: <input type = "checkbox" name = "fruits[]" value = "arange"/><br>
    banana: <input type = "checkbox" name = "fruits[]" value = "banana" /><br>
    mango :<input type = "checkbox" name = "fruits[]" value = "mango"/></br>
  <input type = "submit"/>
    </form>
    <?php
$fruits = $_POST["fruits"];
echo count($fruits)
      ?>

</body>
</html>