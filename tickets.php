<?php
$servername = "localhost";
$username = "apache";
$password = "sekret";
$dbname = "gizmos";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
session_start();

echo('<!doctype html>');
echo('<html>');
echo('<head>');
echo('<meta charset="utf-8">');
echo('<head>');
echo('<title>$20 Tickets</title>');
echo('</head>');
echo('<body>');

$sql = "SELECT * FROM tickets";
$stmt=$conn->prepare($sql);
if($stmt->execute()){
    echo("<table>");
        echo("<th>date</th>");
        echo("<th>venue</th>");
        echo("<th>city</th>");
        echo("<th>state</th>");
        echo("<th>artist</th>");
    while($row = $stmt->fetch()) {
        echo("<tr><td>");
        echo($row["date"]);
        echo("</td><td>");
        echo($row["venue"]);
        echo("</td><td>");
        echo($row["city"]);
        echo("</td><td>");
        echo($row["state"]);
        echo("</td><td>");
        echo($row["artist"]);
        echo("</td></tr>");
    }
    echo("</table>");
}

echo('</body>');
echo('</html>');

?>
