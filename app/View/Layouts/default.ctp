<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'EPIC: Enterprise Productivity Information Center');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php


        echo $this->Html->css('animate.min.css');
        echo $this->Html->css('bootstrap.css');
        echo $this->Html->css('core.css');
        echo $this->Html->css('layout.css');
        echo $this->Html->css('bootstrap-extended.css');
        echo $this->Html->css('components.css');
        echo $this->Html->css('plugins.css');
        echo $this->Html->css('loaders.css');
        echo $this->Html->css('responsive.css');
        echo $this->Html->css('color-system.css');
        echo $this->Html->css('fancybox/jquery.fancybox.css');
        //Load Fonts
        echo $this->Html->css('fonts/fonts.css');
        echo $this->Html->css('icons/icomoon/icomoon.css');
        echo $this->Html->css('icons/weather/weather-icons.min.css');
        echo $this->Html->css('icons/weather/weather-icons-wind.min.css');
        //End fonts
        echo $this->fetch('fonts');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
          <?php
        if ($this->Session->check('Username')) { ?>
<body class="material-menu" id="top">
    <div id="preloader">
        <div id="status">
            <div class="loader">
                <div class="loader-inner ball-pulse">
                  <div class="bg-blue"></div>
                  <div class="bg-amber"></div>
                  <div class="bg-success"></div>
                </div>
            </div>
        </div>
    </div>

<?php
            echo $this->element('sidebar');
        }
		else {
		?><body style="height:100%; background:url('../app/webroot/assets/images/assets/login_bg.jpg') no-repeat 0 0; background-size:cover;">
                <div id="preloader">
                    <div id="status">
                        <div class="loader">
                            <div class="loader-inner ball-pulse">
                              <div class="bg-blue"></div>
                              <div class="bg-amber"></div>
                              <div class="bg-success"></div>
                            </div>
                        </div>
                    </div>
                </div>



         <?php
		}
        ?>
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>

        </div>
		</div>
    </body>

    <?php
    //Load all JS Files Here

    echo $this->Html->script('jquery.js');
    echo $this->Html->script('bootstrap.js');
    echo $this->Html->script('jquery.ui.js');
    echo $this->Html->script('nav.accordion.js');
    echo $this->Html->script('hammerjs.js');
    echo $this->Html->script('jquery.hammer.js');
    echo $this->Html->script('scrollup.js');
    echo $this->Html->script('jquery.slimscroll.js');
    echo $this->Html->script('smart-resize.js');
    echo $this->Html->script('blockui.min.js');
    echo $this->Html->script('wow.min.js');
    echo $this->Html->script('fancybox.min.js');
    echo $this->Html->script('venobox.js');
    echo $this->Html->script('forms/uniform.min.js');
    echo $this->Html->script('forms/switchery.js');
    echo $this->Html->script('forms/select2.min.js');
    echo $this->Html->script('core.js');


    //This is page specific JS.  We check the controller, then load the JS for that page


    ?>
    <script>
        var version = '0.3.10';
        function checkVersion() {alert('Version: ' + version); }
        
            </script>
    <?php
if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')){ echo $this->Js->writeBuffer(); }
// Writes cached scripts
?>
</html>

