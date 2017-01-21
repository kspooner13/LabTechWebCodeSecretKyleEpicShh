      <div class="login-container">

        <div class="page-content">

          <div class="animated flipInY">
            <div class="panel panel-body login-form border-left border-left-lg border-left-info">
			
			     <?php echo $this->Form->create('user', array('inputDefaults' => array('label' => false))); ?>
	         <fieldset>
              <div class="text-center m-b-20">
                <div class='icon-object bg-info'><i class='icon-user'></i></div>
                <h5>Please sign-in to your account</h5>
                
              </div>
            <center> <div class="notification-error bg-warning"><?php echo $this->Session->flash(); ?></div> </center><br>


              <div class="form-group has-feedback has-feedback-left input-group">
                <span class='input-group-addon'><i class='icon-user'></i></span>
                <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
              </div>

              <div class="form-group has-feedback has-feedback-left input-group">
                <span class='input-group-addon'><i class='icon-key'></i></span>
              <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
              </div>


            
            <div class='input-group' style='padding-left: 40px; padding-right: 40px;'>
                    Select Server:   <?php echo $this->Form->select('database', $dblist, array('class' => 'select input-sm', 'empty' => false)); ?>
            </div>
            <div class='form-group'>
              <button type="submit" id='submit' class="btn btn-info btn-labeled btn-labeled-right btn-block"><b><i class="icon-enter"></i></b> Sign in</button>
            </div>

            <div class='form-group'>
              <button type="button" id='submit' class="btn btn-success btn-labeled btn-labeled-right btn-block"><b><i class="icon-envelope"></i></b> Contact Administrator</button>
            </div>
              <p class="footer">Please see your LabTech Adminstrator<br/>for any account issues.</p>
        </fieldset>
        </div>
        <?php echo $this->Form->end(); ?>

        <div class="panel panel-body login-form border-left border-left-lg border-left-info"> 
                
                If you are sent here to establish a remote support session, please input your email below.
                <br><br>
                    <div class="input-group">
                    <span class='input-group-addon'><i class='icon-envelope'></i></span>
                        <input type="email" class="form-control" value="me@example.com" style="width: 250px;" />
                        
                    </div>
            <div class='form-group'>
              <button type="submit" id='submit' class="btn btn-grey btn-labeled btn-labeled-right btn-block disabled"><b><i class="icon-enter"></i></b>Begin</button>
            </div>
                
                </div>
            </div>
          </div>

        </div>

      </div>
      




<!-- Javascript -->



