<?php 
require 'C:\xampp\htdocs\HCQT\PHP\database.php';

if ( !empty($_POST)) {
	// keep track post values
	$TieuDe = $_POST['TieuDe'];
	$TomTat = $_POST['TomTat'];
	$NoiDung = $_POST['NoiDung'];
	$NgayDang = $_POST['NgayDang'];
	$DoUuTien = $_POST['DoUuTien'];
	
	// insert data
	$conn = Database::connect();
	$sql = "INSERT INTO TinTuc (TieuDe,TomTat,NoiDung,NgayDang,DoUuTien) values('$TieuDe', '$TomTat', '$NoiDung','$NgayDang','$DoUuTien')";
	$conn->query($sql);
	Database::disconnect();
	header("Location: TinTuc_QL.php");
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
    			<h3>TaoTinTuc</h3>
    		</div>
	
			<form class="form-horizontal" action="TinTuc_Tao.php" method="post">

			  <div class="control-group">
			    <label class="control-label">TieuDe</label>
			    <div class="controls">
			      	<input name="TieuDe" type="text"  placeholder="TieuDe" value="<?php echo !empty($TieuDe)?$TieuDe:'';?>">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">TomTat</label>
			    <div class="controls">
			      	<input name="TomTat" type="text" placeholder="TomTat" value="<?php echo !empty($TomTat)?$TomTat:'';?>">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">NoiDung</label>
			    <div class="controls">
			      	<input name="NoiDung" type="text"  placeholder="NoiDung" value="<?php echo !empty($NoiDung)?$NoiDung:'';?>">
			    </div>
			    </div>
			  <div class="control-group">
			    <label class="control-label">NgayDang</label>
			    <div class="controls">
			      	<input name="NgayDang" type="text"  placeholder="NgayDang" value="<?php echo !empty($NgayDang)?$NgayDang:'';?>">
			    </div>
			    </div>
			  <div class="control-group">
			    <label class="control-label">DoUuTien</label>
			    <div class="controls">
			      	<input name="DoUuTien" type="text"  placeholder="DoUuTien" value="<?php echo !empty($DoUuTien)?$DoUuTien:'';?>">
			    </div>
			  </div>
			  <div class="form-actions">
				  <button type="submit" class="btn btn-success">TinTuc_Tao</button>
				  <a class="btn" href="TinTuc_QL.php">Back</a>
				</div>
			</form>
		</div>
    </div> <!-- /container -->
</body>
</html>