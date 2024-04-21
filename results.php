<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restirate</title>
    <link rel="stylesheet" href="main.css">
  </head>
	<body>
		<?php 
			include "nav.php"; 
			require_once("sql.php");
		?>
		<div id="resultstable">
			<?php 
				$sql = "SELECT * FROM restaurants";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    echo "<table>";
				    echo "<tr><th>Restaurant</th><th>Vote</th></tr>";
				    while($row = $result->fetch_assoc()) {
				        echo "<tr><td>".$row["restaurant"]."</td><td>".$row["vote"]."</td></tr>";
				    }
				    echo "</table>";
				} else {
				    echo "0 results";
				}
			$conn->close();
		?>
		</div>

  </body>
</html>