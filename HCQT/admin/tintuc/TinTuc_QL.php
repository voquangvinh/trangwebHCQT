<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="../asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../asset/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
		<div class="row">
			<h3>PHP CRUD Tin tuc</h3>
		</div>
		<div class="row">
			<p>
				<a href="TinTuc_Tao.php" class="btn btn-success">Dang Tin</a>
			</p>
			
			<table class="table table-striped table-bordered">
              	<thead>
	                <tr>
	                  	<th>Tieu De</th>
	                  	<th>Tom Tat</th>
	                  	<th>Ngay Dang</th>
	                  	<th>Do Uu Tien</th>
	                  	<th>Action</th>
	                </tr>
              	</thead>
              	<tbody>
              	<?php 
			   	include 
			   	'C:\xampp\htdocs\HCQT\PHP\database.php';
			   	$conn = Database::connect();
			   	$sql = "SELECT * FROM TinTuc";
				$results = mysqli_query($conn, $sql);
				if ($results->num_rows > 0) {
				    // output data of each row
				    while($row = $results->fetch_assoc()) {
				        echo '<tr>';
					   	echo '<td>'. $row['TieuDe'] . '</td>';
					   	echo '<td>'. $row['TomTat'] . '</td>';
					   	echo '<td>'. $row['NgayDang'] . '</td>';
					   	echo '<td>'. $row['DoUuTien'] . '</td>';
					   	echo '<td width=250>';
					   	echo '<a class="btn btn-primary" href="TinTuc_Doc.php?id='.$row['ID'].'">Read</a>';
					   	echo '&nbsp;';
					   	echo '<a class="btn btn-success" href="TinTuc_Sua.php?id='.$row['ID'].'">Update</a>';
					   	echo '&nbsp;';
					   	echo '<a class="btn btn-danger" href="TinTuc_Xoa.php?id='.$row['ID'].'">Delete</a>';
					   	echo '</td>';
					   	echo '</tr>';
				    }
				} else {
				    echo "0 results";
				}
			   	Database::disconnect();
			  	?>
			      </tbody>
            </table>
    	</div>
    </div> <!-- /container -->
  </body>
</html>