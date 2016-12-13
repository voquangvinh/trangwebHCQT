<?php 
$id = null;
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}

if ( null==$id ) {
	header("Location: CBGV_QL.php");
}

require 'C:\xampp\htdocs\HCQT\PHP\database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// keep track post values
	$Ho = $_POST['Ho'];
	$Ten= $_POST['Ten'];
	$TrinhDo = $_POST['TrinhDo'];
	$ChucVu = $_POST['ChucVu'];
	$MaTo = $_POST['MaTo'];

		// update data
	$conn = Database::connect();
	$sql = "UPDATE cbgv SET Ho='$Ho', Ten='$Ten', TrinhDo='$TrinhDo', ChucVu='$ChucVu', MaTo='$MaTo',       WHERE id=$id";
	$conn->query($sql);
	Database::disconnect();
	header("Location: CBGV_QL.php");
} else {
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
				<h3>CBGV_Sua</h3>
			</div>
			<form class="form-horizontal" action="CBGV_Sua.php?id=<?php echo $data['id']?>" method="post">
				<div class="control-group">
					<label class="control-label">Ho</label>
					<div class="controls">
						<input Ho="Ho" type="text"  placeholder="Ho" value="<?php echo $data['Ho'];?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Ten</label>
					<div class="controls">
						<input name="Ten" type="text" placeholder="Ten" value="<?php echo $data['Ten'];?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">TrinhDo</label>
					<div class="controls">
						<input name="TrinhDo" type="text" placeholder="TrinhDo" value="<?php echo $data['TrinhDo'];?>">
					</div>

					<div class="control-group">
					<label class="control-label">MaTo</label>
					<div class="controls">
						<input name="MaTo" type="text"  placeholder="MaTo" value="<?php echo $data['MaTo'];?>">
					</div>
				</div>

					<div class="form-actions">
					<button type="submit" class="btn btn-success">Update</button>
					<a class="btn" href="CBGV_QL.php">Back</a>
				</div>
			</form>
		</div>
	</div> <!-- /container -->
</body>
</html>