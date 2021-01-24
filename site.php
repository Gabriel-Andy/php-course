<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my php project</title>
</head>
<body>
  <?php
  class Book {
    var $title;
    var $author;
    var $pages;
  }
  $book1  = new Book;
  $book2 = new Book;
  $book1 -> title = "harry poter";
  $book1 -> author = " jk Rouling";
  $book1 -> pages  = 400;
  $book2 -> title = "gabriel fono";
  echo $book1 -> author;
  
  echo $book2 -> title;
  ?>


</body>
</html>