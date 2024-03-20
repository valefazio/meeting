<!DOCTYPE html>
<html>
<head>
    <title>Users list</title>
	<style>
		table {
            border-collapse: collapse;
            margin: 0 20% 0 20%;
            width: 60%;
            display: inline-table;
            border:white 2px solid;
			border-radius: 10px;
		}
		th, td {
			text-align: left;
			padding: 8px;
        }
        th {
            background-color: #0d8baa;
            color: white;
        }
		tr:nth-child(even) {background-color: #f2f2f2;}
	</style>
</head>
<body>
    <?php
		include("../Management/navbar.php");
		$users = getUsers("users",$_SESSION['logged']);
        if ($users) {
            ?>
                <h1>List of allowed users</h1>
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Admin</th>
                    </tr>
            <?php
            foreach ($users as $profile) {
				echo "<tr>";
				echo "<td>" . $profile['username'] . "</td>";
				echo "<td>" . $profile['email'] . "</td>";
				echo "<td>". $profile["admin"]. "</td>";
            }
            echo "</table>";
        } else {
            echo "User not found.";
        }
    ?>
</body>
</html>
