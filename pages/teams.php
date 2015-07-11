<?php

//home.php  mainpage
$dbclass = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

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
        <li><a href='#'><i class='fa fa-home blue'></i></a></li>
        <li><a href='#'>Modules</a></li>
		<li><a href='#'>Health Check</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
<!-- Row Start -->
<div class='row'>

<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>

  <!-- Row Start -->
  <div class='row'>

  <?php
	// Lets do some calculations to get overall scores to look pretty
	
	$sql = "SELECT ROUND(AVG(AntiVirus), 1) AS AV,
				ROUND(AVG(`disk`),1) AS `Disk`,
				ROUND(AVG(Intrusion),1) AS Intrusion,
				ROUND(AVG(Usability),1) AS Usability,
				ROUND(AVG(Services),1) AS Services,
				ROUND(AVG(`Event Log`),1) AS `Event Log`,
				ROUND(AVG(Updates),1) AS Updates,
				ROUND(
				  ROUND(
					ROUND(AVG(Antivirus))+
					ROUND(AVG(`Disk`))+
					ROUND(AVG(Intrusion))+
					ROUND(AVG(Usability))+
					ROUND(AVG(Services))+
					ROUND(AVG(`Event Log`))+
					ROUND(AVG(Updates)))/7, 2) AS `Overall Score` 
		FROM hc_scores";
	$calcs = $dbclass -> query($sql);
	$info = $dbclass->fetch_array($calcs);

	
	
	?>
  	<div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'style='padding-left: 15%;'>

	<?php //this does spacing things ?>

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Facebook -->
      <div class='social-box facebook'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-bug'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span><?php echo $info['AV']; ?>%</span> AntiVirus
          </div>
        </div>
      </div>
      <!-- Social Box - Facebook End -->

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Twitter -->
      <div class='social-box twitter'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-tasks'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span><?php echo $info['Disk']; ?>%</span> Disks
          </div>
        </div>
      </div>
      <!-- Social Box - Twitter End -->

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Dribble -->
      <div class='social-box dribbble'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-users'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span><?php echo $info['Intrusion']; ?>%</span> Intrusion
          </div>
        </div>
      </div>
      <!-- Social Box - Dribble End -->

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Projects -->
      <div class='social-box projects'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-thumbs-o-up'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span><?php echo $info['Usability']; ?>%</span> Usability
          </div>6
        </div>
      </div>
      <!-- Social Box - Projects End -->

    </div>

  <!-- Row End -->

</div>
</div>

<div class='row' style='align: center;'>

<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>

	<div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'style='padding-left: 15%;'>

	<?php //this does spacing things ?>

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Projects -->
      <div class='social-box tasks'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-gears'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span><?php echo $info['Services']; ?>%</span> Services
          </div>
        </div>
      </div>
      <!-- Social Box - Projects End -->

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Projects -->
      <div class='social-box posts'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-wrench'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span><?php echo $info['Updates'];?>%</span> Updates
          </div>
        </div>
      </div>
      <!-- Social Box - Projects End -->

    </div>
	    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Projects -->
      <div class='social-box services'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-file-o'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span><?php echo $info['Event Log'];?>%</span> Event Logs
          </div>
        </div>
      </div>
      <!-- Social Box - Projects End -->

    </div>  
	<div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Projects -->
      <div class='social-box overall'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-wrench'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span><?php echo $info['Overall Score'];?>%</span> Overall
          </div>
        </div>
      </div>
      <!-- Social Box - Projects End -->

    </div>
	

  </div>
</div>
</div>

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
<script src="plugins/jquery/jquery-2.1.0.min.js"></script>

<script>
$(document).ready( function () {
   var teamTable= $('#table').DataTable({
		"processing": true,
		"serverSide": true,
		"searching": false,
		
		"ajax" : {
			url: "pages/json/mainpage.php?type=getTeam",
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