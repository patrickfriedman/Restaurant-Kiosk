
<div class="container">
	<h1 class="page-header text-center">Menu Override</h1>
	<div class="row">
		<div class="col-md-12">
			<a href="#addMenu" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Item</a>
			<?php include('menu_table_modal.php'); ?>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Item ID</th>
				<th>Name</th>
				<th>Price</th>
				<td>Allergens</td>
				<td>Calories</td>
				<td>Description</td>
				<td>Ingredients</td>
			</thead>
			<tbody>
				<?php
					$sql="select * from Menu order by Menu_ItemID asc";
					$result=$conn->query($sql);
					while($row=$result->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['Menu_ItemID']; ?></td>
							<td><?php echo $row['Menu_Name']; ?></td>
							<td><?php echo $row['Price']; ?></td>
							<td><?php echo $row['Allergens']; ?></td>
							<td><?php echo $row['Calories']; ?></td>
							<td><?php echo $row['Description']; ?></td>
							<td><?php echo $row['Menu_Ingredients']; ?></td>
							<td>
								<a href="#editMenu<?php echo $row['Menu_ItemID']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deleteMenu<?php echo $row['Menu_ItemID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('menu_table_modal.php'); ?>
							</td>
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
				window.location = 'manager.php';
			}
			else
			{
				window.location = 'manager.php?category='+$(this).val();
			}
		});
	});
</script>