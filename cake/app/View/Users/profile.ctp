<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a></li>
        <li>Dashboard ></li>
        <li>User Profile </li>
    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="iconfa-user"></span></div>
        <div class="pagetitle">
            <h5>Editing User Profile</h5>
            <h1><?php echo $user['User']['Name']; ?></h1>
        </div>
    </div><!--pageheader-->



    <div class="maincontent">
        <div class="maincontentinner">
            <div class="row-fluid">
                <div class="span4 profile-left">

                    <div class="widgetbox profile-photo">
                        <div class="headtitle">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Change Photo</a></li>
                                    <li><a href="#">Remove Photo</a></li>
                                </ul>
                            </div>
                            <h4 class="widgettitle">Profile Photo</h4>
                        </div>
                        <div class="widgetcontent">
                            <div class="profilethumb">
                                <?php echo $this->Html->image('014.jpg'); ?>
                            </div><!--profilethumb-->
                        </div>
                    </div>


                    <div class="widgetbox tags">
                        <h4 class="widgettitle">Tags</h4>
                        <div class="widgetcontent">
                            <ul class="taglist">
                                <li><a href="">Can Open Tickets <span class="close">&times;</span></a></li>
                                <li><a href="">Alter Tickets <span class="close">&times;</span></a></li>
                                <li><a href="">Command Level <?php echo $user['User']['CommandLevel']; ?> <span class="close">&times;</span></a></li>
                                <?php
                                if ($user['User']['Manager'] > '0') {
                                    echo "<li><a href=''>Is Manager <span class='close'>&times;</span></a></li>";
                                }
                                if ($user['User']['LoginReport'] > '0') {
                                    echo "<li><a href=''>Login Reporting <span class='close'>&times;</span></a></li>";
                                }
                                if ($user['User']['LogoutReport'] > '0') {
                                    echo "<li><a href=''>Logout Reporting<span class='close'>&times;</span></a></li>";
                                }
                                if ($user['User']['AuditLevel'] > '0') {
                                    echo "<li><a href=''>Is Audited <span class='close'>&times;</span></a></li>";
                                }
                                ?>
                                
                                
                                
                            </ul>
                            <a href='' style='display:block;margin-top:10px'>+ Add Tag</a>
                        </div>
                    </div>

                </div><!--span4-->
                <div class='span8'>
                    <form action="editprofile.html" class="editprofileform" method="post">

                        <div class="widgetbox login-information">
                            <h4 class="widgettitle">Login Information</h4>
                            <div class="widgetcontent">
                                <p>
                                    <label>Username:</label>
                                    <input type="text" name="username" class="input-xlarge" value="<?php echo $user['User']['Name']; ?>" />
                                </p>
                                <p>
                                    <label>Email:</label>
                                    <input type="text" name="email" class="input-xlarge" value="<?php echo $user['User']['Email']; ?>" />
                                </p>
                                <p>
                                    <label style="padding:0">Password</label>
                                    <a href="">Change Password?</a>
                                </p>
                            </div>
                        </div>


                        <div class="widgetbox personal-information">
                            <h4 class="widgettitle">Personal Information</h4>
                            <div class="widgetcontent">
                                <p>
                                    <label>Firstname:</label>
                                    <input type="text" name="firstname" class="input-xlarge" value="John" />
                                </p>
                                <p>
                                    <label>Lastname:</label>
                                    <input type="text" name="lastname" class="input-xlarge" value="Doe" />
                                </p>
                                <p>
                                    <label>Location:</label>
                                    <input type="text" name="location" class="input-xlarge" value="Mars" />
                                </p>
                            </div>
                        </div>

                        <div class="widgetbox profile-notifications">
                            <h4 class="widgettitle">Notifications</h4>
                            <div class="widgetcontent">
                                <p>
                                    <input type="checkbox" /> Email me when someone mentions me... <br />
                                    <input type="checkbox" /> Email me when someone follows me...
                                </p>
                            </div>
                        </div>

                        <p>
                            <button type="submit" class="btn btn-primary">Update Profile</button> &nbsp; <a href="">Deactivate your account</a>
                        </p>

                    </form>
                </div><!--span8-->
            </div><!--row-fluid-->


        </div><!--maincontentinner-->
    </div><!--maincontent-->


</div>