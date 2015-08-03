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
echo $this->Html->script('jquery-2.1.0.min.js');
echo $this->Html->script('jquery-ui.min.js');
echo $this->Html->script('all-pages.js');
echo $this->Html->script('bootstrap/bootstrap.min.js');
echo $this->Html->script('dashboard.js');
echo $this->Html->script('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true');
echo $this->Html->script('jquery.simpleWeather.js');
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
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap.css');


        echo $this->Html->css('font-awesome.new.css');

        echo $this->Html->css('style.default.css');
        echo $this->Html->css('style-responsive.css');
        echo $this->Html->css('responsive-tables.css');
        echo $this->Html->css('prettify.css');
        echo $this->Html->css('animate.css');
        echo $this->Html->css('demo.css');



        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>        <?php
        if ($this->Session->check('Username')) { ?>
        <div id="mainwrapper" class="mainwrapper">

<?php
            echo $this->element('sidebar');
        }
        ?>
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>

        </div>
    </body>

    <?php
if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')){ echo $this->Js->writeBuffer(); }
// Writes cached scripts
?>
</html>

