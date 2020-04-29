<div class="container">
	<h1 class="page-header text-center">Receipt Override</h1>
	<div class="row">
		<div class="col-md-12">
			<a href="#addBill" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Receipt</a>		
			<?php include('bills_table_modal.php'); ?>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Transaction ID</th>
				<th>Customer ID</th>
				<th>Date</th>
				<td>Total</td>
			</thead>
			<tbody>
				<?php
					$sql="select * from receipts order by transaction_id asc";
					$result=$conn->query($sql);
					while($row=$result->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['transaction_id']; ?></td>
							<td><?php echo $row['customer_id']; ?></td>
							<td><?php echo $row['date']; ?></td>
							<td><?php echo $row['total']; ?></td>
							<td>
								<a href="#editBill<?php echo $row['transaction_id']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deleteBill<?php echo $row['transaction_id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('bills_table_modal.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>