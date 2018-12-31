<?php require_once('Utility.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Main Page</title>

</head>

<body style="background: url('images/background2.png'); background-size: 100% 100%;">
	
	<?php require_once('php_css/header.php');?> 
	<div class="float-right">
					<?php if (isset($_SESSION['success'])) {
							 //echo "<p class='success'>[Login] ".$_SESSION['success']."</p>";
							 unset ($_SESSION['success']);
							  }
									if (isset($_SESSION['displayname'])){
										$displayname = trim($_SESSION['displayname'], '#');
										 if (strcmp($_SERVER["REQUEST_URI"], "index.php")) {
											// echo "<p class='credentials' style='color: #A9A9A9;'>Welcome, ".$displayname. " <a href='../../logout.php' title='Logout'><img src='images/logout1.png' width='25px' height='25px' alt='Logout'/></a></p>"; 
											echo "<p class='credentials'>Welcome, ".$displayname. " <a href='logout.php' title='Logout'><img src='images/logout1.png' width='25px' height='25px' alt='Logout'/></a></p>"; 
										}							  

									}

							?>
	</div>		

	<div class="container-fluid pt-5">
      <div class="row">

		<div class="col-sm-2 col-md-2 col-lg-2">
			
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10">
			<div class="row">
				<div class="col-lg-1"></div>

				<div class="col-sm-5 col-md-5 col-lg-4" style="opacity: 0.8;">
					<div class="card">
						<div class="card-header bg-dark">
							<div class="card-title"><h5><u><a href="/fyp/fyp.php" class="text-white">Examiner Allocation Module</a></u></h5></div>
						</div>
						<a href="/fyp/fyp.php"><img class="card-img-top img-fluid" src="images/examiner_mod_bw.png" alt="Examiner Allocation Module"/></a>
						<div class="card-body">
							<!-- <h4 class="card-title">
								<a href="/fyp/fyp.php">Examiner Allocation Module</a>
							</h4> -->
							<div class="card">
								<div class="card-header text-white" style="background-color: #336699;">
									1. General
								</div>
								<div class="card-body">
									<p>
										&#x02666; Project List<br/>
										&#x02666; Faculty List
										
									</p>
								</div>
							</div>

							<div class="card">
								<div class="card-header text-white" style="background-color: #336699;">
									2. Pre-Allocation
								</div>
								<div class="card-body">
									<p>
										&#x02666; Staff Pref Settings<br/>
										&#x02666; Faculty Settings<br/>
										&#x02666; Timeslot Exception

									</p>
								</div>
							</div>

							<div class="card">
								<div class="card-header text-white" style="background-color: #336699;">
									3. Allocation
								</div>
								<div class="card-body">
									<p>
										&#x02666; Allocation Settings<br/>
										&#x02666; Allocation System<br/>
										&#x02666; View Allocation Plan
										
									</p>
								</div>
							</div>
								
						</div>
					</div>
				</div>

				<div class="col-sm-5 col-md-5 col-lg-4" style="opacity: 0.8;">
					<div class="card">
						<div class="card-header bg-dark" style="background-color: #999999;">
							<h5 class="card-title"><u><a href="/pref/nav.php" class="text-white">Staff Preference Module</a></u></h5>
						</div>
						<a href="/pref/nav.php"><img  width="800" height="600" class="card-img-top img-fluid" src="images/staff_pref_bw.png" alt="Staff Preference Module"/></a>
						<div class="card-body">
							<div class="card">
								<div class="card-header text-white" style="background-color: #336699;">
									Staff Preference
								</div>
								<div class="card-body">
									<p>
										&#x02666; Project Preference Selection<br/>
										&#x02666; Area Preference Selection<br/>
										&#x02666; View Supervising Projects
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div> 
	<br/><br/><br/>
	
</div>

<?php require_once('footer.php'); ?>

</body>
</html>