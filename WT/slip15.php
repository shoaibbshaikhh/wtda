<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Suggestions Demo</title>
</head>
<body>
    <h2>Type something in the textbox:</h2>
    <input type="text" id="searchBox" onkeyup="fetchSuggestions()">
    <ul id="suggestionList"></ul>

    <script>
        function fetchSuggestions() 
        {
            var searchQuery = document.getElementById("searchBox").value.toLowerCase();
            var suggestions = ["apple", "banana","orange","pear","pineapple","grape","watermelon","kiwi","mango"];
            var matchingSuggestions = [];

            for (var i = 0; i < suggestions.length; i++) 
            {
                if (suggestions[i].toLowerCase().startsWith(searchQuery)) 
                {
                    matchingSuggestions.push(suggestions[i]);
                }
            }
            displaySuggestions(matchingSuggestions);
        }
        function displaySuggestions(suggestions) 
        {
            var suggestionList = document.getElementById("suggestionList");
            suggestionList.innerHTML = "";

            for (var i = 0; i < suggestions.length; i++) 
            {
                var listItem = document.createElement("li");
                listItem.textContent = suggestions[i];
                suggestionList.appendChild(listItem);
            }
        }
    </script>
</body>
</html>