<!DOCTYPE html>
<html>
	<head>
		<title>Store Management System (SMS)</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<script src="sms/js/bootstrap.min.js"></script>
		<meta name="description" content="">
		<meta name="author" content="">
	</head>
	<body>
		<?php
			//display complain categories
			function filterNations($query){
				$servername = "localhost";
				$username = "root";
				$password = "";
				$db="sms";
				$conn = mysqli_connect($servername, $username, $password, $db);
				
				//$conn = mysqli_connect('localhost', 'root', '', 'sms');
				
				$filter_Result = mysqli_query($conn, $query);
				return $filter_Result;
			}
			$query = "SELECT * FROM blocks";
			$search_result = filterNations($query);
		?>
		<div class="container">

			<div class="row">
				<nav class="navbar navbar-expand-md navbar-dark bg-info mb-3">
					<div class="container-fluid">
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<div class="navbar-nav">
								<a class="navbar-brand mr-3" href="index.php">First page</a>
								<a style="color: gold" class="navbar-brand mr-3" href="abu.php"><b>Abu</b></a>
								<a class="navbar-brand mr-3" href="nicodemo.php">Nikodemo</a>
								<a class="navbar-brand mr-3" href="hitler.php">Hitler</a>
								<a class="navbar-brand mr-3" href="Enock.php">Enock</a>
								<a  class="navbar-brand mr-3" href="dept.php">department</a>
								<a  class="navbar-brand mr-3" href="source.php">source</a>
								<a  class="navbar-brand mr-3" href="suppliers1.php">suppliers</a>
							</div>
						</div>
					</div>    
				</nav>
			</div>
			<div class="row">				
				<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<!--<p>left side</p>-->
				</div>
				<div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
					<center><p><h4>Blocks entry centre<h4></p></center>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<!--<p>Right side</p>-->
				</div>
			</div>
			<div class="row">				
				<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<!--<p>left side</p>-->
				</div>
				<div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
					<center>
						<form method="post" action="depart.php">
						<div class="form-group row">
								<label style="text-align: right" class="col-sm-3 col-form-label">deptId</label>
								<div class="col-sm-3">
									<input type="text" class="form-control mb-2" id="deptId" name="txtdeptId" required="required">
								</div>
							</div>	
							<div class="form-group row">
								<label style="text-align: right" class="col-sm-3 col-form-label">deptName</label>
								<div class="col-sm-3">
									<input type="text" class="form-control mb-2" id="deptName" name="txtdeptName" required="required">
								</div>
							</div>	
							<!--<div class="form-group row">							
								<label style="text-align: right" class="col-sm-3 col-form-label">Block No</label>
								<div class="col-sm-3">
									<input type="text" class="form-control mb-2" id="blockNo" name="txtBlockNo"></textarea>
								</div>
							</div>*/-->
						<div class="form-group row">
							
							<label style="text-align: right" class="col-sm-3 col-form-label">Block No</label>
							<div class="col-sm-1">
								<table border=0>
									<tr>								
										<td>
											<?php
												echo '<select name="cboBlockNo" required="required">
													<option value="" color="btn-success" disabled selected></option>';			 							
													while ($row = mysqli_fetch_array($search_result)) {
													echo '<option>'.$row['BlockNo'].'</option>';
													}												 
												echo '</select>';												 
											?> 											
										</td>
									</tr>
								</table>
							</div>
							
						</div>
							
							<div class="form-group row">	
								<label class="col-sm-3 col-form-label"></label>
								<div class="col-sm-3">
									<button type="submit" class="btn btn-success mb-3" name="insertderpartment">Save</button>
								</div>							
							</div>	
						</form>
					</center>
				</div>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<!--<p>Right side</p>-->
				</div>
			</div>
		</div>
	</body>
</html>