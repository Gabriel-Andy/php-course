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
    function __construct($atitle, $aAuthor, $aPages){
     $this->title = $atitle;
     $this->author = $aAuthor;
     $this->pages = $aPages;
   }
  }
  $book1  = new Book("Gabriel", "batisseur fono ", 400);
  $book2  = new Book("fono", "kenko", 500);
  echo $book1->author;
  echo $book2->author;

  

  ?>


</body>
</html>