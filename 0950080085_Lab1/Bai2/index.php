<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<CENTer><h3 class="text-primary">GỬI Ý KIẾN</h3></CENTer>
		
		<hr style="border-top:1px dotted #ccc;" />
		<div class="col-md-3">
			<form method="POST" action="add.php">
				<div class="form-group">
					<label>Họ tên</label>
					<input class="form-control" type="text" name="HoTen"/>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="text" name="Email"/>
				</div>
				<div class="form-group">
					<label>Nội Dung</label> 
					<input class="form-control" type="text" name="NoiDung"/>
				</div>
				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit" name="save">Gửi</button>
				</div>
			</form>
		</div>
		<div class="col-md-9">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>DANH SÁCH Ý KIẾN</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						$sql = $conn->prepare("SELECT * FROM `user`");
						$sql->execute();
						while($fetch = $sql->fetch()){
					?>
					<tr>
						<td><?php echo $fetch['HoTen']?><BR>
						<?php echo $fetch['Email']?><BR>
						<?php echo $fetch['NoiDung']?></td><BR>
					</tr>

					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>
</html>