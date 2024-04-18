contact.dat-
1 Snkalp 344534 9813654132 nashik
2 Raj 333344 9813654134 pune
3 manas 789813 9813654139 nagpur
4 gaurav 645946 9813654131 dhule

slip12.html-
<html>
<head>
    <title>Contact Viewer</title>
</head>
<body>
    <button onclick="fetchContacts()">Print Contacts</button>
    <div id="contactTable"></div>

    <script>
        function fetchContacts() 
        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4 && this.status == 200) 
                {
                    document.getElementById("contactTable").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "slip12.php", true);
            xmlhttp.send();
        }
    </script>
</body>
</html>

slip12.php -
<?php
$filename = "contact.dat";
if (file_exists($filename)) 
{
    $contacts = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo "<table border='1'>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Residence Number</th>
                <th>Mobile Number</th>
                <th>Address</th>
            </tr>";
    foreach ($contacts as $contact) 
    {
        $data = explode(',', $contact);
        echo "<tr>
                <td>{$data[0]}</td>
                <td>{$data[1]}</td>
                <td>{$data[2]}</td>
                <td>{$data[3]}</td>
                <td>{$data[4]}</td>
              </tr>";
    }
    echo "</table>";
} 
else 
{
    echo "Contact file not found.";
}
?>