<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my php project</title>
</head>
<body>
<h2>this is my calulator</h2>
<form action = "site.php" method = "post">
num1: <input type = "number"  value = 2 name = "num1" />
operator: <input type = "text" value = "+" name = "operator" />
num2: <input type = "number" name = "num2" />
<input type = "submit"/>
</form>

    <?php
    $num1 = $_POST['num1'];
     $num2 = $_POST['num2'];
     $operator = $_POST["operator"];
     if($operator == "+") {
        echo $num1 + $num2;
     }
     elseif($operator == "-"){
       echo $num1 - $num2;
     }
     elseif($operator == "/") {
       echo $num1 / $num2;
     }elseif($operator == "*") {
        echo $num1 * $num2;
     } else {
       echo "invalid operator";
     }
       
     ?>

</body>
</html>