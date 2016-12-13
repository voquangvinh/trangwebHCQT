<?php 
$id = null;
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}

if ( null==$id || !(is_numeric($id))) {
	header("Location :CBGV_QL.php");
} else {
	include 'C:\xampp\htdocs\HCQT\PHP\database.php';
   	$conn = Database::connect();
   	$sql = "SELECT * FROM cbgv";
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
    			<h3>Doc CBGV</h3>
    		</div>
    		
			<div class="form-horizontal" >
			  <div class="control-group">
			    <label class="control-label">Ho</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['Ho'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Ten</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['Ten'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Trinh Do</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['TrinhDo'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">ChucVu</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['ChucVu'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">MaTo</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['MaTo'];?>
				    </label>
			    </div>
			  </div>
			    <div class="form-actions">
				  <a class="btn" href="CBGV_QL.php">Back</a>
				   </div>
			</div>
		</div>
    </div> <!-- /container -->
  </body>
</html>