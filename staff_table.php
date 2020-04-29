
<div class="container">
	<h1 class="page-header text-center">Employee Management</h1>
	<div class="row">
		<div class="col-md-12">
			<select id="catList" class="btn btn-default">
			<option value="0">All Roles</option>
			<?php
				//Category select
				$sql="select * from staff_id";
				$catresult=$conn->query($sql);
				while($catrow=$catresult->fetch_array()){	//While there is another record
					$catid = isset($_GET['category']) ? $_GET['category'] : 0;	//If category set, use that ID, otherwise use 0
					$selected = ($catid == $catrow['rank_id']) ? " selected" : ""; //Mark category as selected (either selected or empty string)
					echo "<option$selected value=".$catrow['rank_id'].">".$catrow['rank_name']."</option>";	//Options for dropdown list
				}
			?>
			</select>
			<a href="#addStaff" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Staff Member</a>
			<?php include('staff_table_modal.php'); ?>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Staff ID</th>
				<th>Name</th>
				<th>Hours Worked</th>
				<th>Rank</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					$where = "";
					if(isset($_GET['category']))
					{
						$catid=$_GET['category'];
						$where = " WHERE staff.Rank = $catid";
					}
					$sql="select * from staff left join staff_id on staff_id.rank_id=staff.Rank $where order by staff.Staff_ID asc";
					$result=$conn->query($sql);
					while($row=$result->fetch_array()){
				?>
						<tr>
							<td><?php echo $row['Staff_ID']; ?></td>
							<td><?php echo $row['Staff_Name']; ?></td>
							<td><?php echo $row['Staff_Hours']; ?></td>
							<td><?php echo $row['rank_name']; ?></td>
							<td>
								<a href="#editStaff<?php echo $row['Staff_ID']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deleteStaff<?php echo $row['Staff_ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('staff_table_modal.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>

</tbody>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#catList").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'manager.php';
			}
			else
			{
				window.location = 'manager.php?category='+$(this).val();
			}
		});
	});
</script>