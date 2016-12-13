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
			<h3>PHP CRUD CBGV_QL</h3>
		</div>
		<div class="row">
			<p>
				<a href="CBGV_Tao.php" class="btn btn-success">DangCBGV</a>
			</p>
			
			<table class="table table-striped table-bordered">
              	<thead>
	                <tr>
	                  	<th>Ho</th>
	                  	<th>Ten</th>
	                  	<th>TrinhDo</th>
	                  	<th>ChucVu</th>
	                  	<th>MaTo</th>
	                  	<th>Action</th>
	                </tr>
              	</thead>
              	<tbody>
              	<?php 
	include 'C:\xampp\htdocs\HCQT\PHP\database.php';
			   	$conn = Database::connect();
			   	$sql = "SELECT * FROM cbgv";
				$results = mysqli_query($conn, $sql);
				if ($results->num_rows > 0) {
				    // output data of each row
				    while($row = $results->fetch_assoc()) {
				        echo '<tr>';
					   	echo '<td>'. $row['Ho'] . '</td>';
					   	echo '<td>'. $row['Ten'] . '</td>';
					   	echo '<td>'. $row['TrinhDo'] . '</td>';
					   	echo '<td>'. $row['ChucVu'] . '</td>';
					   	echo '<td>'. $row['MaTo'] . '</td>';

					   	echo '<td width=250>';
					   	echo '<a class="btn btn-success" href="CBGV_Doc.php?id='.$row['id'].'">Read</a>';
					   	echo '&nbsp;';
					   	echo '<a class="btn btn-success" href="CBGV_Sua.php?id='.$row['id'].'">Update</a>';
					   	echo '&nbsp;';
					   	echo '<a class="btn btn-danger" href="CBGV_Xoa.php?id='.$row['id'].'">Delete</a>';
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