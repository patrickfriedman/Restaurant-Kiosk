<div class="container">
	<h1 class="page-header text-center">Order Management</h1>
	<div class="row">
		<div class="col-md-12">
			</select>
			<a href="#addOrder" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Order</a>
			<?php include('order_modal.php'); ?>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Order ID</th>
				<th>Menu Item ID</th>
				<th>Quantity</th>
				<th>Status</th>
				<th>Table Number</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from Orders";
					$result=$conn->query($sql);
					while($row=$result->fetch_array()){
				?>
						<tr>
							<td><?php echo $row['Order_ID']; ?></td>
							<td><?php echo $row['Menu_ItemID']; ?></td>
							<td><?php echo $row['Quantity']; ?></td>
							<td><?php echo $row['Status']; ?></td>
							<td><?php echo $row['Table_Number']; ?></td>
							<td>
								<a href="#editOrder<?php echo $row['Order_ID']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deleteOrder<?php echo $row['Order_ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('order_modal.php'); ?>
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