<?php

//home.php  mainpage


?>

<div class="content-liquid-full">
  <div class="container">

  <!-- Header Bar Start -->
  <div class="row header-bar" id="step2">

      
    </div>
  <!-- Header Bar End -->

  <!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
         <li><a href="#"><i class="fa fa-home blue"></i></a></li>
         <li><a href="#">Support</a></li>
         <li><a href="#">Ticket Archive</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <!-- Mail Table Start -->
      <div class="boxed no-padding mail-container">
        <div class="inner">

          <!-- Header Start -->
          <div class="header">
            <ul>
              <li>
                <a href="#">
                  <i class="fa fa-envelope"></i> Ticket Archive
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-star"></i> Unread Tickets
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-check-circle"></i> Solved Tickets
                </a>
              </li>
            </ul>
          </div>
          <!-- Header End -->

          <!-- Actions Start -->
          <div class="actions">
            <ul>
              <li><input type="checkbox" name="checkbox" id="checkbox" value="1" /> All</li>
              <li><a href="#"><i class="fa fa-refresh"></i></a></li>
              <li><a href="#"><i class="fa fa-inbox"></i></a></li>
              <li><a href="#"><i class="fa fa-exclamation-circle"></i></a></li>
              <li><a href="#"><i class="fa fa-trash-o"></i></a></li>
              <li><a href="#">Move</a></li>
            </ul>
          </div>
          <!-- Actions End -->

          <table class="support">

            <tbody>

            <tr class="checked">
              <td><input type="checkbox" class="icheck-blue" value="1" name="icheck-blue" checked="checked" /></td>
              <td><i class="fa fa-star"></i></td>
              <td><a href="ticket.html">#LTK-84927/3</a></td>
              <td><span class="tag urgent">Urgent</span></td>
              <td class="hidden-xs">My site is not working well</td>
              <td>Jul 12</td>
            </tr>

            <tr>
              <td><input type="checkbox" class="icheck-blue" value="1" name="icheck-blue" /></td>
              <td class="stared"><i class="fa fa-star"></i></td>
              <td><a href="ticket.html">#LTK-84937/3</a></td>
              <td><span class="tag urgent">Urgent</span></td>
              <td class="hidden-xs">Please tell me how can I make this work</td>
              <td>Jul 12</td>
            </tr>

            <tr>
              <td><input type="checkbox" class="icheck-blue" value="1" name="icheck-blue" /></td>
              <td><i class="fa fa-star"></i></td>
              <td><a href="ticket.html">#LTK-84947/1</a></td>
              <td><span class="tag normal">Normal</span></td>
              <td class="hidden-xs">Password changed and I don't know it</td>
              <td>Jul 12</td>
            </tr>

            <tr>
              <td><input type="checkbox" class="icheck-blue" value="1" name="icheck-blue" /></td>
              <td><i class="fa fa-star"></i></td>
              <td><a href="ticket.html">#LQK-84937/6</a></td>
              <td><span class="tag normal">Normal</span></td>
              <td class="hidden-xs">I can't access my web mail</td>
              <td>Jul 11</td>
            </tr>

            <tr>
              <td><input type="checkbox" class="icheck-blue" value="1" name="icheck-blue" /></td>
              <td><i class="fa fa-star"></i></td>
              <td><a href="ticket.html">#LQK-424337/8</a></td>
              <td><span class="tag normal">Normal</span></td>
              <td class="hidden-xs">I need your support!</td>
              <td>Jul 10</td>
            </tr>


            </tbody>
          </table>

        </div>
      </div>
      <!-- Mail Table End -->

    </div>
  </div>
      
  </div>
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