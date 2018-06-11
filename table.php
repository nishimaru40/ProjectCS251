<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utilf.css">
	<link rel="stylesheet" type="text/css" href="css/mainf.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name</th>
									<th class="cell100 column2">IDCard</th>
									<th class="cell100 column3">Phone</th>
									<th class="cell100 column4">Email</th>
									<th class="cell100 column5">Check-in</th>
									<th class="cell100 column6">Delete</th>
								</tr>
							</thead>
						</table>
					</div>
					
<div class="table100-body js-pscroll">
		<table>
			<tbody>		
				<?php 
				require("mysql/connect.php");

				$sql="select * from books ";

				$result=mysqli_query($con,$sql);
				
				if($result){
					while($record=mysqli_fetch_array($result,MYSQLI_ASSOC)){
								$name=$record['name'];
								$card=$record['idCard'];
								$phone=$record['phone'];
								$email=$record['email'];
								$chIn=$record['checkIn'];
								echo'
						
								<tr class="row100 body">
									<td class="cell100 column1">'.$name.'</td>
									<td class="cell100 column2">'.$card.'</td>
									<td class="cell100 column3">'.$phone.'</td>
									<td class="cell100 column4">'.$email.'</td>
									<td class="cell100 column5">'.$chIn.'</td>

									<form method="post" action="delete.php">
									<input type="hidden" name="idCard" value='.$record['idCard'].'>
									<td class="cell100 column6"><input name="submit" type="submit" value="Delete" onclick= window.location.reload()/></td>
									</form>
								</tr>	
							';
					}
				}
				?>		
			</tbody>
		</table>
									

					</div>
					
				
				
				

				
				
					
					
				
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>