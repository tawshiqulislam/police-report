<?php 
//require_once('session_login.php');
include('dbconnect.php');
include('header.php');

 ?>

 
<br />
<div class="container-fluid">
	<?php include('menubar.php');?>
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">
			 			Case List
			 		</h3>
			 	</div>
<div id="trans-table">
<table id="myTable-trans" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th>S/N</th>
	        
	         <th>Date Of Application</th>
	        <th ><center>Name</center></th>
	        <th><center>Mobile</center></th>
	        <th><center>NID</center></th>
	        <th><center>Statement</center></th>
	        <th><center>Statement</center></th>
	        <th><center>Action</center></th>
	    </tr>
	</thead>
    <tbody>
    	<?php
		// The serial number variable
		$sn=0;
		$query=mysqli_query($dbcon,"select * from prev_complain where status='0'");
		while($row = mysqli_fetch_array($query)){
		$id = $row['id'];
		$sn++;
		?>
		<tr>
       
        <td><?php echo $sn;?></td>
       
        <td><?php echo $row['date_added'];?></td> 
		<td><?php echo $row['comp_name'];?></td>
		<td><?php echo $row['tel']; ?></td>  
		<td><?php echo $row['NID']; ?></td>
		<td><?php echo $row['statement']; ?></td>
		<td><?php echo $row['addrs']; ?></td>
		
		<td class="empty" width="">
		<form method="post">
		<button type="button" name="app" data-toggle="modal" data-target="#<?php echo $row['case_id'];?>" data-placement="left" title="Click to edit"   class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
        </form>
            <?php 
                if(isset($_POST['app'])){
                    $sql = "UPDATE prev_complain SET status='1' WHERE id='$id'";
                    require_once("mysql.php");
                    if (mysqli_query($dbc, $sql)) {
                        echo "<script> alert('Case ID will notify to the user soon.') </script>";
                    }
                }
            ?> 
		</td>
		</tr>
	<?php } ?>    
    </tbody>
</table>
</div>
</div>

	</div>
	<div class="col-md-1"></div>
</div>


<?php include('scripts.php'); ?>


	

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable-trans').DataTable();
	});
</script>
</body>
</html>