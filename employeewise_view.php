<?php 
	include "inc/header.php"; 
	include "classes/Employee.php"; 
	$emp = new Employee();
?>

	<div class="container">
<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
?>
		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-success" href="add.php">Add Employee</a>
					<a class="btn btn-dark float-right" href="index.php" style="margin-left:10px">Vote</a>
				</h2>
			</div>

			<div class="card-body">
      <div class="card bg-light text-center mb-3">
					<h4 class="m-0 py-3"><strong>Voting Results</strong></h4>
				</div>
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="25%">Serial Number</th>
							<th width="25%">Candidate ID</th>
							<th width="25%">Candidate Name</th>
							<th width="25%">Votes</th>
						<!---
							<th width="15%">S/L</th>
							<th width="45%">Employee Name</th>
							<th width="20%">Total Present Days</th>
							<th width="20%">Total Working Days</th>
						--->
						</tr>
<?php 
	$getdate = $emp->getEmployeeAttendanceCount();
	if ($getdate) {
		$i = 0;
		while ($value = $getdate->fetch_assoc()) {
			$i++;
?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['roll']; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['count_p']."/".$value['count_t']; ?></td>
						</tr>
<?php } } ?>
					</table>
				</form>
			</div>
		</div>
	</div>
<?php include("inc/footer.php"); ?>