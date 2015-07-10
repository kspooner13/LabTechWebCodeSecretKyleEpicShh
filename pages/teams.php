<?php

//home.php  mainpage


?>

<div class='content-liquid-full'>
<div class='container'>

 <!-- Header Bar Start -->
  <div class='row header-bar' id='step2'>

  </div>
  <!-- Header Bar End -->

  <!-- Breadcrumbs Start -->
  <div class='row breadcrumbs'>
    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
      <ul class='breadcrumbs'>
        <li><a href='#'><i class='fa fa-home'></i></a></li>
        <li><a href='#'>Dashboard</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
<!-- Row Start -->


<div class='row'>

<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <h3>LabTech Health Check</h3>

      <!-- Row Start -->
      <div class="row">

        <!-- Basic Example Start -->
        <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="inner">

            <!-- Title Bart Start -->
            <div class="title-bar white">
              <h4>Teams Listed</h4>
            </div>
            <!-- Title Bart End -->

            <!-- Table Holder Start -->
            <div class="table-holder">

				<table class="datatables table table-striped table-bordered" id="table">
					<thead>
						<tr>
							<th><a href="#">Client Name</a></th>
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




  </div>

 



  </div>



</div>
</div>
<!-- Right Sidebar End -->


</div>
<!-- Row End -->

<!-- Footer Line Start -->
<div class='footer-line'>
  &#169; All rights reserved by EPiCenter (Kyle Spooner / Brandon Zylka)
</div>

</div>
</div>

</section>
<script src="../plugins/jquery/jquery-2.1.0.min.js"></script>

<script>
$(document).ready( function () {
   var teamTable= $('#table').DataTable({
		"processing": true,
		"serverSide": true,
		"searching": false,
		
		"ajax" : {
			url: "/pages/json/mainpage.php?type=getTeam",
			type: "post" },
		"aoColumnDefs": [
		{
			"aTargets": [ 0 ],
			"mRender": function ( data, type, full ) {
				return "<a href='index.php?client=1&team=" + full[0] + "'>" + data + "</a>";
				}
			}
		]
		}

	);
	});
	</script>