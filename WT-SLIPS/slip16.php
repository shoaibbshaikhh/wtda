slip16.html-
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Details</title>
</head>
<body>
    <h2>Select a book:</h2>
    <select id="bookList" onchange="getBookDetails()">
        <option value="">Select a book</option>
        <option value="book1">Book 1</option>
        <option value="book2">Book 2</option>
        <option value="book3">Book 3</option>
        <!-- Add more options as needed -->
    </select>

    <div id="bookDetails"></div>

    <script>
        function getBookDetails() {
            var selectedBook = document.getElementById("bookList").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) 
                {
                    displayBookDetails(this);
                }
            };
            xhttp.open("GET", "book.xml", true);
            xhttp.send();
        }
        function displayBookDetails(xml) 
        {
            var xmlDoc = xml.responseXML;
            var selectedBook = document.getElementById("bookList").value;
            var books = xmlDoc.getElementsByTagName("book");

            for (var i = 0; i < books.length; i++) 
            {
                var title = books[i].getElementsByTagName("title")[0].childNodes[0].nodeValue;
                var author = books[i].getElementsByTagName("author")[0].childNodes[0].nodeValue;
                var year = books[i].getElementsByTagName("year")[0].childNodes[0].nodeValue;
                var price = books[i].getElementsByTagName("price")[0].childNodes[0].nodeValue;

                if (selectedBook == title.toLowerCase().replace(/\s/g, '')) {
                    var details = "<h3>" + title + "</h3>";
                    details += "<p>Author: " + author + "</p>";
                    details += "<p>Year: " + year + "</p>";
                    details += "<p>Price: " + price + "</p>";

                    document.getElementById("bookDetails").innerHTML = details;
                }
            }
        }
    </script>
</body>
</html>

book.xml 
<books>
    <book>
        <title>Book 1</title>
        <author>Ram</author>
        <year>2012</year>
        <price>200</price>
    </book>
    <book>
        <title>Book 2</title>
        <author>Sham</author>
        <year>2020</year>
        <price>450</price>
    </book>
    <book>
        <title>Book 3</title>
        <author>Lakhan</author>
        <year>2019</year>
        <price>15</price>
    </book>
</books>