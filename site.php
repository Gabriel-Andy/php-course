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
num1: <input type = "number" step = "0.001"   name = "num1" /> <br>
operator: <input type = "text"  name = "operator" /><br>
num2: <input type = "number" name = "num2" /><br>
<input type = "submit"/>
</form>

    <?php
    $num1 = $_POST['num1'];
     $num2 = $_POST['num2'];
     $operator = $_POST["operator"];
   function output($operator,$num1,$num2) {
     switch($operator) {
       case "+" :
       echo $num1 + $num2;
       break;
       case "-" :
       echo $num1 - $num2;
       break;
      case "/" :
       echo $num1 / $num2;
       break;
       case "*" :
       echo $num1 * $num2;
       break;
       default :
       echo "invalid operator";
     }
      
  }
  output($operator,$num1,$num2)
       
     ?>

</body>
</html>