<?php
//CLIENT PAGE FANCY LIKE
?>

<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a> <span class="separator"></span></li>
        <li>Dashboard ></li>
        <li>Clients</li>
    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="fa fa-university"></span></div>
        <div class="pagetitle">
            <h5>LabTech</h5>
            <h1><?php echo $client['Client']['Name']; ?></h1>
        </div>
    </div><!--pageheader-->

    <div class="maincontent">
        <div class="maincontentinner">
            <div class="row-fluid">
                <div class="page-content">
                    <div class="container-fluid">


                        <div class='row'>

                            <div class="col-lg-2">

                                <div class="widgetbox">
                                    <h4 class="widgettitle">Overall Health</h4>
                                    <div class="widgetcontent">NUMBER HERE</div>

                                </div>
                            </div>
                            <div class="col-lg-2">

                                <div class="widgetbox">
                                    <h4 class="widgettitle">Disk Health</h4>
                                    <div class="widgetcontent">Body</div>

                                </div>
                            </div>
                            <div class="col-lg-2">

                                <div class="widgetbox">
                                    <h4 class="widgettitle">Services Health</h4>
                                    <div class="widgetcontent">Body</div>

                                </div>
                            </div>
                            <div class="col-lg-2">

                                <div class="widgetbox">
                                    <h4 class="widgettitle">Patch Health</h4>
                                    <div class="widgetcontent">Body</div>

                                </div>
                            </div>
                            <div class="col-lg-2">

                                <div class="widgetbox">
                                    <h4 class="widgettitle">Event Log Health</h4>
                                    <div class="widgetcontent">Body</div>

                                </div>
                            </div>
                            <div class="col-lg-2">

                                <div class="widgetbox">
                                    <h4 class="widgettitle">Usability Health</h4>
                                    <div class="widgetcontent">Body</div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php print_r($client); ?>
                        </div>



                    </div>

                </div>


            </div>
        </div>
    </div>
</div>