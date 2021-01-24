<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my php project</title>
</head>
<body>
  <?php
  class Student {
    var $name;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa){
     $this->name = $name;
     $this->major = $major;
     $this->gpa= $gpa;
   }
   function hasHonors(){
     if($this->gpa >= 3.5){
      return "I am on the honor";
     }
     return "I am not honorable student";
   }
   
  }
  
  $student1 = new Student("jim", "busness", 2.5);
  $student2 = new Student ("pam", "civil engineering", 3.6);
  $student3 = new Student("kenko", "accountant", 3.5);
 

   echo $student3->hasHonors();
  

  ?>


</body>
</html>