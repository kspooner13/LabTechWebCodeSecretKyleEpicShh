




<script>
$(document).ready( function () {
   var teamTable= $('#team_table').DataTable({
		"processing": true,
		"serverSide": true,
		"searching": false,
		"ajax" : {
			url: "json/mainpage.php?type=getTeam",
			type: "post" }
	
		}
	);
	var expTable= $('#ex_table').DataTable({
		"processing": true,
		"serverSide": true,
		"searching": false,
		"ajax" : {
			url: "json/mainpage.php?type=getEx",
			type: "post" }
	
		}
	);
	var specTable= $('#spec_table').DataTable({
		"processing": true,
		"serverSide": true,
		"searching": false,
		"ajax" : {
			url: "json/mainpage.php?type=getSpec",
			type: "post" }
	
		}
	);
} );
</script>



<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Teams</a></li>
			<li><a href="#"><?php echo $_REQUEST['team']; ?></a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-desktop"></i>
					<span><?php echo $_REQUEST['team'];?> Team</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
					<thead>
						<tr>
							<th class=names width=300><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Client Name\">Client Name</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Antivirus\">Antivirus</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Disk\">Disk</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Intrusion\">Intrusion</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Usability\">Usability</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Services\">Services</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Updates\">Updates</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Events\">Events</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Overall Score\">Overall Score</a></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th class=names width=300><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Client Name\">Client Name</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Antivirus\">Antivirus</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Disk\">Disk</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Intrusion\">Intrusion</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Usability\">Usability</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Services\">Services</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Updates\">Updates</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Events\">Events</a></th>
							<th class=stats><a href=\"care_score.php?careteam={$careteam}&sorting=".$sort."&field=Overall Score\">Overall Score</a></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-linux"></i>
					<span>LinuxJournal Readers' Choice Awards 2013 Linux distro</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding table-responsive">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-2">
					<thead>
						<tr>
							<th><label><input type="text" name="search_rate" value="Search rate" class="search_init" /></label></th>
							<th><label><input type="text" name="search_name" value="Search distro" class="search_init" /></label></th>
							<th><label><input type="text" name="search_votes" value="Search votes" class="search_init" /></label></th>
							<th><label><input type="text" name="search_homepage" value="Search homepage" class="search_init" /></label></th>
							<th><label><input type="text" name="search_version" value="Search versions" class="search_init" /></label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Ubuntu</td>
							<td>16%</td>
							<td><i class="fa fa-home"></i><a href="http://ubuntu.com" target="_blank">http://ubuntu.com</a></td>
							<td>13.10</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Debian</td>
							<td>14.1%</td>
							<td><i class="fa fa-home"></i><a href="http://debian.org" target="_blank">http://debian.org</a></td>
							<td>7.4</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Arch Linux</td>
							<td>10.8%</td>
							<td><i class="fa fa-home"></i><a href="http://archlinux.org" target="_blank">http://archlinux.org</a></td>
							<td>2014.02.01</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Linux Mint</td>
							<td>10.5%</td>
							<td><i class="fa fa-home"></i><a href="http://linuxmint.com" target="_blank">http://linuxmint.com</a></td>
							<td>16</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Fedora</td>
							<td>6.9%</td>
							<td><i class="fa fa-home"></i><a href="http://fedoraproject.org" target="_blank">http://fedoraproject.org</a></td>
							<td>20</td>
						</tr>
						<tr>
							<td>6</td>
							<td>openSUSE</td>
							<td>5.2%</td>
							<td><i class="fa fa-home"></i><a href="http://opensuse.org" target="_blank">http://opensuse.org</a></td>
							<td>13.1</td>
						</tr>
						<tr>
							<td>7</td>
							<td>SolydK</td>
							<td>4.7%</td>
							<td><i class="fa fa-home"></i><a href="http://solydxk.com" target="_blank">http://solydxk.com</a></td>
							<td>201401</td>
						</tr>
						<tr>
							<td>8</td>
							<td>CentOS</td>
							<td>4.1%</td>
							<td><i class="fa fa-home"></i><a href="http://centos.org" target="_blank">http://centos.org</a></td>
							<td>6.5</td>
						</tr>
						<tr>
							<td>9</td>
							<td>Kubuntu</td>
							<td>3.8%</td>
							<td><i class="fa fa-home"></i><a href="http://www.kubuntu.org" target="_blank">http://www.kubuntu.org</a></td>
							<td>13.10</td>
						</tr>
						<tr>
							<td>10</td>
							<td>PCLinuxOS</td>
							<td>3.7%</td>
							<td><i class="fa fa-home"></i><a href="http://www.pclinuxos.com" target="_blank">http://www.pclinuxos.com</a></td>
							<td>2013</td>
						</tr>
						<tr>
							<td>11</td>
							<td>Gentoo</td>
							<td>3.2%</td>
							<td><i class="fa fa-home"></i><a href="http://gentoo.org" target="_blank">http://gentoo.org</a></td>
							<td>20140211</td>
						</tr>
						<tr>
							<td>12</td>
							<td>Other</td>
							<td>2.1%</td>
							<td>-</td>
							<td>none</td>
						</tr>
						<tr>
							<td>13</td>
							<td>Slackware</td>
							<td>2.1%</td>
							<td><i class="fa fa-home"></i><a href="http://slackware.com" target="_blank">http://slackware.com</a></td>
							<td>14.1</td>
						</tr>
						<tr>
							<td>14</td>
							<td>elementary OS</td>
							<td>2%</td>
							<td><i class="fa fa-home"></i><a href="http://elementaryos.org" target="_blank">http://elementaryos.org</a></td>
							<td>20130810</td>
						</tr>
						<tr>
							<td>15</td>
							<td>Xubuntu</td>
							<td>2%</td>
							<td><i class="fa fa-home"></i><a href="http://xubuntu.org" target="_blank">http://xubuntu.org</a></td>
							<td>14.04</td>
						</tr>
						<tr>
							<td>16</td>
							<td>Manjaro</td>
							<td>1.8%</td>
							<td><i class="fa fa-home"></i><a href="http://manjaro.org" target="_blank">http://manjaro.org</a></td>
							<td>0.8.8</td>
						</tr>
						<tr>
							<td>17</td>
							<td>Red Hat Enterprise Linux</td>
							<td>1.6%</td>
							<td><i class="fa fa-home"></i><a href="http://redhat.com" target="_blank">http://redhat.com</a></td>
							<td>7</td>
						</tr>
						<tr>
							<td>18</td>
							<td>Ubuntu Server</td>
							<td>1.6%</td>
							<td><i class="fa fa-home"></i><a href="http://ubuntu.com" target="_blank">http://ubuntu.com</a></td>
							<td>13.10</td>
						</tr>
						<tr>
							<td>19</td>
							<td>CrunchBang</td>
							<td>1.1%</td>
							<td><i class="fa fa-home"></i><a href="http://crunchbang.org" target="_blank">http://crunchbang.org</a></td>
							<td>11</td>
						</tr>
						<tr>
							<td>20</td>
							<td>Mageia</td>
							<td>0.8%</td>
							<td><i class="fa fa-home"></i><a href="http://www.mageia.org" target="_blank">http://www.mageia.org</a></td>
							<td>3</td>
						</tr>
						<tr>
							<td>21</td>
							<td>Chakra</td>
							<td>0.6%</td>
							<td><i class="fa fa-home"></i><a href="http://www.chakra-project.org" target="_blank">http://www.chakra-project.org</a></td>
							<td>2014.02</td>
						</tr>
						<tr>
							<td>22</td>
							<td>Lubuntu</td>
							<td>0.5%</td>
							<td><i class="fa fa-home"></i><a href="http://lubuntu.net" target="_blank">http://lubuntu.net</a></td>
							<td>13.10</td>
						</tr>
						<tr>
							<td>23</td>
							<td>Puppy</td>
							<td>0.2%</td>
							<td><i class="fa fa-home"></i><a href="http://puppylinux.org" target="_blank">http://puppylinux.org</a></td>
							<td>5.1.1</td>
						</tr>
						<tr>
							<td>24</td>
							<td>Bodhi Linux</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://www.bodhilinux.com" target="_blank">http://www.bodhilinux.com</a></td>
							<td>2.4.0</td>
						</tr>
						<tr>
							<td>25</td>
							<td>Kali Linux</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://www.kali.org" target="_blank">http://www.kali.org</a></td>
							<td>1.0.6</td>
						</tr>
						<tr>
							<td>26</td>
							<td>Mandriva</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://openmandriva.org" target="_blank">http://openmandriva.org</a></td>
							<td>2013</td>
						</tr>
						<tr>
							<td>27</td>
							<td>Oracle Linux</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://oracle.com" target="_blank">http://oracle.com</a></td>
							<td>3</td>
						</tr>
						<tr>
							<td>28</td>
							<td>SolusOS</td>
							<td>0.1%</td>
							<td>abandoned</td>
							<td>1.3</td>
						</tr>
						<tr>
							<td>29</td>
							<td>Zorin OS</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://zorin-os.com" target="_blank">http://zorin-os.com</a></td>
							<td>8</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Rate</th>
							<th>Distro</th>
							<th>Votes</th>
							<th>Homepage</th>
							<th>Version</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-linux"></i>
					<span>Most popular Linux distro</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-3">
					<thead>
						<tr>
							<th>Rate</th>
							<th>Distro</th>
							<th>Votes</th>
							<th>Homepage</th>
							<th>Version</th>
							<th>Icon</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Ubuntu</td>
							<td>16%</td>
							<td><i class="fa fa-home"></i><a href="http://ubuntu.com" target="_blank">http://ubuntu.com</a></td>
							<td>13.10</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Debian</td>
							<td>14.1%</td>
							<td><i class="fa fa-home"></i><a href="http://debian.org" target="_blank">http://debian.org</a></td>
							<td>7.4</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Arch Linux</td>
							<td>10.8%</td>
							<td><i class="fa fa-home"></i><a href="http://archlinux.org" target="_blank">http://archlinux.org</a></td>
							<td>2014.02.01</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Linux Mint</td>
							<td>10.5%</td>
							<td><i class="fa fa-home"></i><a href="http://linuxmint.com" target="_blank">http://linuxmint.com</a></td>
							<td>16</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Fedora</td>
							<td>6.9%</td>
							<td><i class="fa fa-home"></i><a href="http://fedoraproject.org" target="_blank">http://fedoraproject.org</a></td>
							<td>20</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>6</td>
							<td>openSUSE</td>
							<td>5.2%</td>
							<td><i class="fa fa-home"></i><a href="http://opensuse.org" target="_blank">http://opensuse.org</a></td>
							<td>13.1</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>7</td>
							<td>SolydK</td>
							<td>4.7%</td>
							<td><i class="fa fa-home"></i><a href="http://solydxk.com" target="_blank">http://solydxk.com</a></td>
							<td>201401</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>8</td>
							<td>CentOS</td>
							<td>4.1%</td>
							<td><i class="fa fa-home"></i><a href="http://centos.org" target="_blank">http://centos.org</a></td>
							<td>6.5</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>9</td>
							<td>Kubuntu</td>
							<td>3.8%</td>
							<td><i class="fa fa-home"></i><a href="http://www.kubuntu.org" target="_blank">http://www.kubuntu.org</a></td>
							<td>13.10</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>10</td>
							<td>PCLinuxOS</td>
							<td>3.7%</td>
							<td><i class="fa fa-home"></i><a href="http://www.pclinuxos.com" target="_blank">http://www.pclinuxos.com</a></td>
							<td>2013</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>11</td>
							<td>Gentoo</td>
							<td>3.2%</td>
							<td><i class="fa fa-home"></i><a href="http://gentoo.org" target="_blank">http://gentoo.org</a></td>
							<td>20140211</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>12</td>
							<td>Other</td>
							<td>2.1%</td>
							<td>-</td>
							<td>none</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>13</td>
							<td>Slackware</td>
							<td>2.1%</td>
							<td><i class="fa fa-home"></i><a href="http://slackware.com" target="_blank">http://slackware.com</a></td>
							<td>14.1</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>14</td>
							<td>elementary OS</td>
							<td>2%</td>
							<td><i class="fa fa-home"></i><a href="http://elementaryos.org" target="_blank">http://elementaryos.org</a></td>
							<td>20130810</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>15</td>
							<td>Xubuntu</td>
							<td>2%</td>
							<td><i class="fa fa-home"></i><a href="http://xubuntu.org" target="_blank">http://xubuntu.org</a></td>
							<td>14.04</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>16</td>
							<td>Manjaro</td>
							<td>1.8%</td>
							<td><i class="fa fa-home"></i><a href="http://manjaro.org" target="_blank">http://manjaro.org</a></td>
							<td>0.8.8</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>17</td>
							<td>Red Hat Enterprise Linux</td>
							<td>1.6%</td>
							<td><i class="fa fa-home"></i><a href="http://redhat.com" target="_blank">http://redhat.com</a></td>
							<td>7</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>18</td>
							<td>Ubuntu Server</td>
							<td>1.6%</td>
							<td><i class="fa fa-home"></i><a href="http://ubuntu.com" target="_blank">http://ubuntu.com</a></td>
							<td>13.10</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>19</td>
							<td>CrunchBang</td>
							<td>1.1%</td>
							<td><i class="fa fa-home"></i><a href="http://crunchbang.org" target="_blank">http://crunchbang.org</a></td>
							<td>11</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>20</td>
							<td>Mageia</td>
							<td>0.8%</td>
							<td><i class="fa fa-home"></i><a href="http://www.mageia.org" target="_blank">http://www.mageia.org</a></td>
							<td>3</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>21</td>
							<td>Chakra</td>
							<td>0.6%</td>
							<td><i class="fa fa-home"></i><a href="http://www.chakra-project.org" target="_blank">http://www.chakra-project.org</a></td>
							<td>2014.02</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>22</td>
							<td>Lubuntu</td>
							<td>0.5%</td>
							<td><i class="fa fa-home"></i><a href="http://lubuntu.net" target="_blank">http://lubuntu.net</a></td>
							<td>13.10</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>23</td>
							<td>Puppy</td>
							<td>0.2%</td>
							<td><i class="fa fa-home"></i><a href="http://puppylinux.org" target="_blank">http://puppylinux.org</a></td>
							<td>5.1.1</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>24</td>
							<td>Bodhi Linux</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://www.bodhilinux.com" target="_blank">http://www.bodhilinux.com</a></td>
							<td>2.4.0</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>25</td>
							<td>Kali Linux</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://www.kali.org" target="_blank">http://www.kali.org</a></td>
							<td>1.0.6</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>26</td>
							<td>Mandriva</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://openmandriva.org" target="_blank">http://openmandriva.org</a></td>
							<td>2013</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>27</td>
							<td>Oracle Linux</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://oracle.com" target="_blank">http://oracle.com</a></td>
							<td>3</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>28</td>
							<td>SolusOS</td>
							<td>0.1%</td>
							<td>abandoned</td>
							<td>1.3</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
						<tr>
							<td>29</td>
							<td>Zorin OS</td>
							<td>0.1%</td>
							<td><i class="fa fa-home"></i><a href="http://zorin-os.com" target="_blank">http://zorin-os.com</a></td>
							<td>8</td>
							<td><i class="fa fa-linux"></i></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Rate</th>
							<th>Distro</th>
							<th>Votes</th>
							<th>Homepage</th>
							<th>Version</th>
							<th>Icon</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
