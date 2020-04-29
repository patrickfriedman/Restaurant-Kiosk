<div class="container">
	<h1 class="page-header text-center">Employee Clock</h1>
	<div class="row">
	
		
		<!--
		**************TESTING*****************
		<select id="catList" class="btn btn-default">
		<option value="0">Staff ID</option>
		<?php
			//Category select
			#$sql="select * from staff";
			#$catresult=$conn->query($sql);
			#while($catrow=$catresult->fetch_array()){	//While there is another record
				#$catid = isset($_GET['category']) ? $_GET['category'] : 0;	//If category set, use that ID, otherwise use 0
				#$selected = ($catid == $catrow['Staff_ID']) ? " selected" : ""; //Mark category as selected (either selected or empty string)
				#echo "<option$selected value=".$catrow['Staff_ID'].">".$catrow['Staff_Name']."</option>";	//Options for dropdown list
			#}
		?>
		</select>
		-->
		
		<div class="col-md-12">
		
			<form method="post" action="staff_clockin.php" enctype="multipart/form-data">

			<input class="pull-left btn btn-primary"  style="margin-top:5px;" type="submit" value="Clock In" >
			</form>
			
			
			<form method="post" action="staff_clockout.php" enctype="multipart/form-data">

			<input class="pull-right btn btn-primary"  style="margin-top:5px;" type="submit" value="Clock Out" >
			</form>
			
		</div>

	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Staff ID</th>
				<th>Name</th>
				<th>Last Clock In</th>
				<th>Last Clock Out</th>
				<th>Worked Hours</th>
			</thead>
			<tbody>
				<?php
					$sql="SELECT * FROM `staff` WHERE Staff_ID = '6'";
					$result=$conn->query($sql);
					while($row=$result->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['Staff_ID']; ?></td>
							<td><?php echo $row['Staff_Name']; ?></td>
							<td><?php echo $row['Staff_Clockin']; ?></td>
							<td><?php echo $row['Staff_Clockout']; ?></td>
							<td><?php echo $row['Staff_Hours']; ?></td>
						</tr>
						
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#catList").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'staff.php';
			}
			else
			{
				window.location = 'staff.php?category='+$(this).val();
			}
		});
	});
</script>