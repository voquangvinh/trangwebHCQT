<?php 
$id = null;
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}

if ( null==$id || !(is_numeric($id))) {
	header("Location: TinTuc_QL.php");
} else {
	include 'C:\xampp\htdocs\HCQT\PHP\database.php';
   	$conn = Database::connect();
   	$sql = "SELECT * FROM TinTuc";
	$results = mysqli_query($conn, $sql);
	if ($results->num_rows > 0) {
		$data = $results->fetch_array();
	}
	Database::disconnect();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
		<div class="span10 offset1">
			<div class="row">
    			<h3>Doc tin tuc</h3>
    		</div>
    		
			<div class="form-horizontal" >
			  <div class="control-group">
			    <label class="control-label">Tieu De</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['TieuDe'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Tom Tat</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['TomTat'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">NoiDung</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['NoiDung'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Ngay Dang</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['NgayDang'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Do Uu Tien</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['DoUuTien'];?>
				    </label>
			    </div>
			  </div>
			    <div class="form-actions">
				  <a class="btn" href="TinTuc_QL.php">Back</a>
			   </div>
			</div>
		</div>
    </div> <!-- /container -->
  </body>
</html>