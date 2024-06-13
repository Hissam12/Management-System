<!DOCTYPE html>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table using PHP</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			color: #333;
			font-family: Arial, sans-serif;
			font-size: 14px;
			text-align: left;
		}
		th {
			background-color: #3A6075;
			color: #FFF;
			font-weight: bold;
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		td {
			padding: 10px;
			border-bottom: 1px solid #ddd;
		}
	</style>
</head>
<body>
	<h2>staff detals table</h2>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>password</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Connect to the database
				
$server = 'localhost';
$username = 'root';
$db_password = '';

				// Connect to the database
$conn = mysqli_connect($server,$username,$db_password);

				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// Select data from the database
                $sql = "SELECT `sno`, `email`,`password`, `date` FROM `registeration`.`staffadmin`";

				$result = mysqli_query($conn, $sql);

				// Display data in HTML table
                if ($result->num_rows > 0)  {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['sno'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['password'] . "</td>";
						echo "<td>" . $row['date'] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "0 results";
				}

				// Close database connection
				mysqli_close($conn);
			?>
		</tbody>
	</table>
</body>
</html>
