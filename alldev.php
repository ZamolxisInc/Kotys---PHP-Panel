<?php include 'header.php'; ?>

<?php
if ($conn->connect_error)
{
	echo 'Eroare in conectarea la baza de date';
} else {

	
			
			
			
			$sql = "SELECT * FROM devices ORDER BY id ASC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
			echo '
	<table class="table table-condensed">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Active</th>
		<th>IP</th>
		<th>ActiveWindows</th>
		<th>LastSeen</th>
		<th>CMD</th>
	
      </tr>
    </thead>
    <tbody>';
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo '<tr><td>'.$row["id"].'</td><td>'.$row["name"].'</td><td>'.$row["active"].'</td><td>'.$row["ip"].'</td><td>'.$row["activewindows"].'</td><td>'.$row["lastseen"].'</td><td><a href="cmd.php?id='.$row["id"].'">Select</a></td></tr>';
				
				
				}
			echo ' </tbody>
  </table>';
			}
			else {
				echo "<h2>Fara rezultate</h2>";
			}
			$conn->close();
			
		
			
		

		}
		
?>