<div class="col-md-12">
	<div class="panel panel-success">
		<div class="panel-heading" style="padding-bottom: 40px;">
			<center>
				<h3> Police Report and Crime Report Management System</h3>
			</center>




			<?php

			include('session.php');
			include('dbconnect.php');

			$query = mysqli_query($dbcon, "select * from userlogin where staffid = '$session_id'") or die(mysqli_error($dbcon));
			$row = mysqli_fetch_array($query);

			?>
			<span class="pull-right">
				<?php echo $row['surname'] . " " . $row['othernames'] . " (" . $row['staffid'] . ")";  ?>

				<a href="profile.php"><i class="icon-signout icon-large"></i>&nbsp;Edit</a><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
			</span>

		</div>




	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"> <a href="court_hearing.php">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Court Hearing</a>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"> <a href="addcompl.php">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

								New Complain</a>

						</h3>
					</div>

				</div>
			</div>
		




			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"> <a href="caseview.php">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span> View Cases</a>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"> <a href="pen_caseview.php">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span> View Pending Cases</a>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"> <a href="support.php">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span> User Support</a>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
</div>