<!DOCTYPE html>
<html>

<head>
    <title>Search Records</title>
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

        form {
            display: inline-block;
            margin-bottom: 10px;
        }

        input[type=text] {
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }

        input[type=submit] {
            padding: 5px 15px;
            background-color: #4CAF50;
            color: #FFF;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Search Records</h2>

    <form action="searchgravedetailsbyphone.php" method="POST">
        <label for="search">Search by name  :</label>
        <input type="text" id="search" name="searchbyphonenumber">
        <input type="submit" value="Search" name="Search">
    </form>

    <table>
        <thead>
            <tr>
            
                <th>Name</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Religion</th>
                <th>Date</th>
                <th>Buried Location</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['Search'])) {
                $searchphone = $_POST['searchbyphonenumber'];

                // Connect to the database
                $server = 'localhost';
                $username = 'root';
                $db_password = '';



                $conn = mysqli_connect($server, $username, $db_password);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Query to search for records based on name or phone number
                $sql = "SELECT * FROM `grave`.`gravedetails` WHERE `Phonenumber` LIKE '$searchphone' ";

                $result = mysqli_query($conn, $sql);

                // Display results in HTML table
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                     
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "<td>" . $row['Phonenumber'] . "</td>";
                        echo "<td>" . $row['Address'] . "</td>";
                        echo "<td>" . $row['religion'] . "</td>";
                        echo "<td>" . $row['Date'] . "</td>";
                        echo "<td>" . $row['buriedlocation'] . "</td>";

                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }

                // Close database connection
                mysqli_close($conn);
            }
            ?>
        </tbody>
    </table>
</body>

</html>