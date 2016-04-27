<?php include 'header.php'; ?>
<h1>Latest Commands</h1>
<?php
$id = $_GET["id"];
if ($conn->connect_error)
{
	echo 'Eroare in conectarea la baza de date';
} else {

	
			echo '<a href="addcmd.php?id='.$id.'" class="btn btn-info" role="button">Add Comamnd for this ID</a>';
			
			echo '<a href="viewrep.php?id='.$id.'" class="btn btn-info" role="button">View Reports for this ID</a>';
			
			
			$sql = "SELECT * FROM commands WHERE id = '".$id."' ORDER BY done ASC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
			echo '
	<table class="table table-condensed">
    <thead>
      <tr>
        <th>id</th>
        <th>cmd</th>
        <th>username</th>
		<th>done</th>
		
	
      </tr>
    </thead>
    <tbody>';
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$doneNew = "No";
					if($row["done"] == "1")
					{
						$doneNew = "Yes";
					}
					echo '<tr><td>'.$row["id"].'</td><td>'.$row["cmd"].'</td><td>'.$row["username"].'</td><td>'.$doneNew.'</td></tr>';
				
				
				}
			echo ' </tbody>
  </table>';
			}
			else {
				echo "<h2>No commands</h2>";
			}
			$conn->close();
			
		
			
		

		}
		
?>