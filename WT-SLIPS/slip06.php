book.xml-
<?xml version="1.0" encoding="UTF-8"?>
<BookInfo>
         <book>
                <bookno>1</bookno>
                <bookname>Spectrum</bookname>
                <authorname>Bipin Chandra</authorname>
                <price>250</price>
                <year>2006</year>
         </book>
         <book>
                <bookno>2</bookno>
                <bookname>Polity</bookname>
                <authorname>LaxmiKant</authorname>
                <price>500</price>
                <year>1971</year>
         </book>
</BookInfo> 

book.html-
<html>
    <head>
        <title>XML</title>
    </head>
    <form action="book.php" method="GET">
        CLICK SUBMIT TO SEE RESULT<input type="submit" value="Submit">
    </form>
</html>

book.php-
<?php
  $xm=simplexml_load_file("book.xml");  
  foreach( $xm->book as $k )
  {
         echo "Book No ".$k->bookno."<br>";
         echo "Book Name ".$k->bookname."<br>";
         echo "Book Athor Name ".$k->authorname."<br>";
         echo "Book rice ".$k->price."<br>";
         echo "Book Relee Year ".$k->year."<br>";
  }
?>