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
	<h2>book grave order</h2>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Date</th>
				<th>Phone number</th>
                <th>Address</th>
                <th>religion</th>
                <th>Price</th>
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
                $sql = "SELECT `Name`, `Age`, `Date`, `Phonenumber`, `Address`, `Religion`,`price` FROM `order`.`bookgrave`";

				$result = mysqli_query($conn, $sql);

				// Display data in HTML table
                if ($result->num_rows > 0)  {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['Name'] . "</td>";
						echo "<td>" . $row['Age'] . "</td>";
						echo "<td>" . $row['Date'] . "</td>";
						echo "<td>" . $row['Phonenumber'] . "</td>";
                        echo "<td>" . $row['Address'] . "</td>";
                        echo "<td>" . $row['Religion'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
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
