<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db ="world";

$sql_1 = "SELECT * FROM city where ID = 4079";
$sql_2 = "SELECT * FROM city";
$sql_3 = "SELECT * FROM city LIMIT 50";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query($sql_3);
/*
while ($row = $result->fetch_row()) {
    printf("ID: %s City:%s CountryCode:%s District:%s Population:%s\n", $row[0], $row[1], $row[2], $row[3], $row[4]);
}
*/

		$ctr = 0;
		while($row = $result->fetch_row()){
			$city["city_info"][$ctr][0] = $row[0];
			$city["city_info"][$ctr][1] = $row[1];
			$city["city_info"][$ctr][2] = $row[2];
			$city["city_info"][$ctr][3] = $row[3];
			$city["city_info"][$ctr][4] = $row[4];
			$ctr++;
		}
/*
echo "<pre>";		
print_r($city);
echo "</pre>";
*/

echo "<table border = 1>";
	echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Name</th>";
		echo "<th>CountryCode</th>";
		echo "<th>District</th>";
		echo "<th>Population</th>";
	echo "</tr>";

for($x=0;$x<count($city["city_info"]);$x++){
	echo "<tr>";
	echo "<td>".$city["city_info"][$x][0]."</td>";
	echo "<td>".$city["city_info"][$x][1]."</td>";
	echo "<td>".$city["city_info"][$x][2]."</td>";
	echo "<td>".$city["city_info"][$x][3]."</td>";
	echo "<td>".$city["city_info"][$x][4]."</td>";
	echo "</tr>";
}


echo "</table>";



?>

