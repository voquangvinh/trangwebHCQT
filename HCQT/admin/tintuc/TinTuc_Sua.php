<?php 
$id = null;
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}

if ( null==$id ) {
	header("Location: TinTuc_QL.php");
}

require 'C:\xampp\htdocs\HCQT\PHP\database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// keep track post values
	$TieuDe = $_POST['TieuDe'];
	$TomTat= $_POST['TomTat'];
	$NoiDung = $_POST['NoiDung'];
	$NgayDang = $_POST['NgayDang'];
	$DoUuTien = $_POST['DoUuTien'];

		// update data
	$conn = Database::connect();
	$sql = "UPDATE TinTuc SET TieuDe='$TieuDe', TomTat='$TomTat', NoiDung='$NoiDung', NgayDang='$TieuDe', NgayDang='$NgayDang',       WHERE id=$id";
	$conn->query($sql);
	Database::disconnect();
	header("Location: TinTuc_QL.php");
} else {
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
				<h3>TinTuc_Sua</h3>
			</div>
			<form class="form-horizontal" action="TinTuc_Sua.php?id=<?php echo $data['id']?>" method="post">
				<div class="control-group">
					<label class="control-label">TieuDe</label>
					<div class="controls">
						<input TieuDe="TieuDe" type="text"  placeholder="TieuDe" value="<?php echo $data['TieuDe'];?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">TomTat</label>
					<div class="controls">
						<input name="TomTat" type="text" placeholder="TomTat" value="<?php echo $data['TomTat'];?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">NoiDung</label>
					<div class="controls">
						<input name="NoiDung" type="text" placeholder="NoiDung" value="<?php echo $data['NoiDung'];?>">
					</div>

					<div class="control-group">
					<label class="control-label">NgayDang</label>
					<div class="controls">
						<input TieuDe="NgayDang" type="text"  placeholder="NgayDang" value="<?php echo $data['NgayDang'];?>">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">DoUuTien</label>
					<div class="controls">
						<input TieuDe="DoUuTien" type="text"  placeholder="DoUuTien" value="<?php echo $data['DoUuTien'];?>">
					</div>
				</div>




				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success">Update</button>
					<a class="btn" href="TinTuc_QL.php">Back</a>
				</div>
			</form>
		</div>
	</div> <!-- /container -->
</body>
</html>