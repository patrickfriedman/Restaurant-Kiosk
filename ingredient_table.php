
<div class="container">
	<h1 class="page-header text-center">Inventory Management</h1>
	<div class="row">
		<div class="col-md-12">
			<a href="#addIngredient" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Item</a>		<!--Link to addIngredient function-->
			<?php include('ingredient_table_modal.php'); ?>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Item Name</th>
				<th>Item ID</th>
				<th>Quantity</th>
				<td>Actions</td>
			</thead>
			<tbody>
				<?php
					$sql="select * from Ingredients order by Name asc";
					$result=$conn->query($sql);
					while($row=$result->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['Name']; ?></td>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['Quantity']; ?></td>
							<td>
								<a href="#editIngredient<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deleteIngredient<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('ingredient_table_modal.php'); ?>
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
