<script>
$(document).ready( function () {
   var teamTable= $('#table').DataTable({
		"processing": true,
		"serverSide": true,
		"searching": false,
		"ajax" : {
			url: "json/clientpage.php?type=getData&team=<?php echo $_REQUEST['team'];?>",
			type: "post" }

			
			
		});
	WinMove();
	});
</script>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Teams</a></li>
			<li><a href="#">Computers</a></li>
			<li><a href="#"><?php echo $_REQUEST['team']; ?></a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-desktop"></i>
					<span><?php echo $_REQUEST['team'];?> Team Computers</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="table">
					<thead>
						<tr>
							<th><a href="#">Computer Name</a></th>
							<th><a href="#">Status</a></th>
							<th><a href="#">Antivirus</a></th>
							<th><a href="#">Disk</a></th>
							<th><a href="#">Intrusion</a></th>
							<th><a href="#">Usability</a></th>
							<th><a href="#">Services</a></th>
							<th><a href="#">Updates</a></th>
							<th><a href="#">Events</a></th>
							<th><a href="#">Overall Score</a></th>
						</tr>
					</thead>

				</table>
			</div>
		</div>
	</div>
</div>
