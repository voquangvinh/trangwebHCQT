<?php 
require 'C:\xampp\htdocs\HCQT\PHP\database.php';

if ( !empty($_POST)) {
	// keep track post values
	$Ho = $_POST['Ho'];
	$Ten = $_POST['Ten'];
	$TrinhDo = $_POST['TrinhDo'];
	$ChucVu = $_POST['ChucVu'];
	$MaTo = $_POST['MaTo'];
	
	// insert data
	$conn = Database::connect();
	$sql = "INSERT INTO cbgv (Ho,Ten,TrinhDo,ChucVu,MaTo) values('$Ho', '$Ten', '$TrinhDo','$ChucVu','$MaTo')";
	$conn->query($sql);
	Database::disconnect();
	header("Location: CBGV_QL.php");
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
    			<h3>TaoCBGV</h3>
    		</div>
	
			<form class="form-horizontal" action="CBGV_Tao.php" method="post">

			  <div class="control-group">
			    <label class="control-label">Ho</label>
			    <div class="controls">
			      	<input name="Ho" type="text"  placeholder="Ho" value="<?php echo !empty($Ho)?$Ho:'';?>">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Ten</label>
			    <div class="controls">
			      	<input name="Ten" type="text" placeholder="Ten" value="<?php echo !empty($Ten)?$Ten:'';?>">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Trinh Do</label>
			    <div class="controls">
			      	<input name="TrinhDo" type="text"  placeholder="TrinhDo" value="<?php echo !empty($TrinhDo)?$TrinhDo:'';?>">
			    </div>
			    </div>
			  <div class="control-group">
			    <label class="control-label">ChucVu</label>
			    <div class="controls">
			      	<input name="ChucVu" type="text"  placeholder="ChucVu" value="<?php echo !empty($ChucVu)?$ChucVu:'';?>">
			    </div>
			    </div>
			  <div class="control-group">
			    <label class="control-label">MaTo</label>
			    <div class="controls">
			      	<input name="MaTo" type="text"  placeholder="MaTo" value="<?php echo !empty($MaTo)?$MaTo:'';?>">
			    </div>
			  </div>
			  <div class="form-actions">
				  <button type="submit" class="btn btn-success">CBGV_Tao</button>
				  <a class="btn" href="CBGV_QL.php">Back</a>
				</div>
			</form>
		</div>
    </div> <!-- /container -->
</body>
</html>