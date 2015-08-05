


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
            
            <div class='input-group'>
             Select Labtech Server (DO NOT USE YET - KS):   <?php //echo $this->Form->dropdown('config'); ?>
            </div>

              <input type="submit" class="btn btn-lg btn-success" value="Login to your account" name="login" id="submit" />

              <p class="footer">Please see your LabTech Adminstrator<br/>for any account issues.</p>
</fieldset>

            </div>
          </div>

        </div>

      </div>
      


</section>

<!-- Javascript -->



