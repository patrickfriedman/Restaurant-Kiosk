<div class="container">
	<h1 class="page-header text-center">Coupon Override</h1>
	<div class="row">
		<div class="col-md-12">
			<a href="#addCoupon" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Coupon</a>		<!--Link to addIngredient function-->
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Coupon ID</th>
				<th>Type</th>
				<th>Availability</th>
				<td>Start Date</td>
				<td>End Date</td>
			</thead>
			<tbody>
				<?php
					$sql="select * from Coupons order by Coupon_ID asc";
					$result=$conn->query($sql);
					while($row=$result->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['Coupon_ID']; ?></td>
							<td><?php echo $row['Coupon_Type']; ?></td>
							<td><?php echo $row['Coupon_Avail']; ?></td>
							<td><?php echo $row['Coupon_Start']; ?></td>
							<td><?php echo $row['Coupon_End']; ?></td>
							<td>
								<a href="#editCoupon<?php echo $row['Coupon_ID']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deleteCoupon<?php echo $row['Coupon_ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('coupons_table_modal.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>