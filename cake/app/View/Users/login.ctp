


<section class="content login-page">
<script type="text/javascript">
  jQuery(document).ready(function($){

    var min_height = jQuery(window).height();
    jQuery('div.login-page-container').css('min-height', min_height);
    jQuery('div.login-page-container').css('line-height', min_height + 'px');

    //$(".inner", ".boxed").fadeIn(500);
  });
</script>
<body class='login-page'>
      <div class="row">

        <div class="login-page-container">

          <div class="boxed animated flipInY login-box">
            <div class="inner">
			
			<?php echo $this->Form->create('user', array('inputDefaults' => array('label' => false))); ?>
	<fieldset>
              <div class="login-title text-center">
                <h4>Login to your account</h4>
                
              </div>
            <center> <DIV class="notification-error"><?php echo $this->Session->flash(); ?></div> </center><br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
              </div>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
              </div>
            
            <div class='input-group' style='padding-left: 40px; padding-right: 40px;'>
                    Select Server:   <?php echo $this->Form->select('database', $dblist, array('class' => 'select input-sm', 'empty' => false)); ?>
            </div>

            <input type="submit" class="btn btn-success center" value="Login to the System" name="login" style="width: 145px;" id="submit" />

              <p class="footer">Please see your LabTech Adminstrator<br/>for any account issues.</p>
</fieldset>
                
                <p class="footer"></p>
                <div> 
                
                If you are sent here to establish a remote support session, please input your email below.
                <br><br>
                    <div class="input-group">
                        <input type="email" class="form-control" value="me@example.com" style="width: 250px;" />
                        <input type="submit" class="btn btn-success center" value="Begin" name="email" />
                    </div>
                
                </div>
            </div>
          </div>

        </div>

      </div>
      


</section>

<!-- Javascript -->



