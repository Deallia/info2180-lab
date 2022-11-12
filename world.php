<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$country = strip_tags($_GET["country"]);

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($country!== NULL){
   $answer = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
   $result = $answer->fetch(PDO::FETCH_ASSOC);
   echo $result;
}
?>
<!-- <ul>
//<?php foreach ($results as $row): ?>
//  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
//<?php endforeach; ?>
</ul> -->
