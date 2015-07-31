<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a> <span class="separator"></span></li>
        <li>Dashboard ></li>
        <li>Health Check</li>
    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="iconfa-hospital"></span></div>
        <div class="pagetitle">
            <h5>LabTech Health Check Plugin</h5>
            <h1>Health Check</h1>
        </div>
    </div><!--pageheader-->
    
   <div class="maincontent">
        <div class="maincontentinner">
            <div class="row-fluid">
                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">

                            
                                <div class="panel panel-info panel-square panel-no-border text-center">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Health Check - By Client</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class='table responsive table-bordered table-striped'>
                                            <thead>
                                            <tr>
                                                <td>Client Name</td>
                                                <td>Team Assignment</td>
                                                <td>AntiVirus</td>
                                                <td>Disk</td>
                                                <td>Intrusion</td>
                                                <td>Usability</td>
                                                <td>Services</td>
                                                <td>Updates</td>
                                                <td>Event Log</td>
                                                <td>Average Score</td>
                                            </tr>
                                            </thead>
                                            <?php foreach ($clientScores as $cscore): ?>
                                            <tr>
                                                <td><?php echo $cscore['HealthCheck']['Client Name']; ?> </td>
                                                <td><?php echo $cscore['HealthCheck']['Team Assignment']; ?> </td>
                                                <td><?php echo $cscore['HealthCheck']['Antivirus'];?> </td>
                                                <td><?php echo $cscore['HealthCheck']['Disk']; ?> </td>
                                                <td><?php echo $cscore['HealthCheck']['Intrusion'];?> </td>
                                                <td><?php echo $cscore['HealthCheck']['Usability'];?></td>
                                                <td><?php echo $cscore['HealthCheck']['Services'];?></td>
                                                <td><?php echo $cscore['HealthCheck']['Updates'];?></td>
                                                <td><?php echo $cscore['HealthCheck']['Event Log'];?></td>
                                                <td><?php echo $cscore['HealthCheck']['Avg Score'];?></td>
                                                
                                            </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
    
</div>