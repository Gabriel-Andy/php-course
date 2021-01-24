<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my php project</title>
</head>
<body>
  <?php
 class Chef {
   function makeChiken(){
     echo "The chef makes chiken <br>";
   }
   function makeSalad(){
     echo "The chef makes salad <br>";
   }
   function makespecialDish(){
     echo "The chef makes bbq ribs <br>";
   }
 }
 
 class ItalianChef extends  Chef{
function makePasta(){
  echo "I could make pasta";
}
   function makeChiken(){
     echo "I love coding challenge <br>";
   }
 }
 $chef = new Chef();
 $italianChef = new ItalianChef();
 $italianChef->makeChiken();
  $italianChef->makePasta();

  

  ?>


</body>
</html>