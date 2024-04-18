<?php
$xml = new DOMDocument("1.0","UTF-8");
$xml->formatOutput = true;
$root = $xml->createElement("students");
$xml->appendChild($root);

$students = [
    ["roll_no" => "1", "name" => "Sagar", "address" => "Cidco Nashik", "college" => "RYK", "course" => "Computer Science"],
    ["roll_no" => "2", "name" => "Simran", "address" => "Dgp Nagar", "college" => "CMCS", "course" => "Engineering"],
    ["roll_no" => "3", "name" => "Rutuja", "address" => "Vanshree Colony", "college" => "KTHM", "course" => "Computer Science"],
];

foreach ($students as $studentDetails) 
{
    $student = $xml->createElement("student");
    foreach ($studentDetails as $key => $value) 
    {
        $student->appendChild($xml->createElement($key, $value));
    }
    $root->appendChild($student);
}

$xml->save("student.xml");
if (isset($_GET['course'])) 
{
    $course = $_GET['course'];
    $xml = simplexml_load_file('student.xml');
    echo "<table border='1'>
            <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Address</th>
                <th>College</th>
                <th>Course</th>
            </tr>";
    foreach ($xml->xpath("//student[course='$course']") as $student) {
        echo "<tr>
                <td>{$student->roll_no}</td>
                <td>{$student->name}</td>
                <td>{$student->address}</td>
                <td>{$student->college}</td>
                <td>{$student->course}</td>
            </tr>";
    }
    echo "</table>";
}
?>

student.xml-
<?xml version="1.0" encoding="UTF-8"?>
<students>
  <student>
    <roll_no>1</roll_no>
    <name>Sagar</name>
    <address>Cidco Nashik</address>
    <college>Ryk</college>
    <course>Computer Science</course>
  </student>
  <student>
    <roll_no>2</roll_no>
    <name>Simran</name>
    <address>Dgp Nagar</address>
    <college>CMCS</college>
    <course>Engineering</course>
  </student>
  <student>
    <roll_no>3</roll_no>
    <name>Rutuja</name>
    <address>Vanshree Colony</address>
    <college>KTHM</college>
    <course>Computer Science</course>
  </student>
</students>