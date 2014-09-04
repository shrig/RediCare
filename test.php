<?php
	include('includes/common_constants.php');
	session_start();
	$this_filename = basename(__FILE__);
	$this_page = $page_catalogue[$this_filename][0];
	include('includes/common_page_begin.php');
?>

<script type="text/javascript">
	function verifyEmail() {
		var input = document.getElementById("myEmail").value;
		var atpos = input.indexOf("@");
		var dotpos = input.lastIndexOf(".");
		if (atpos < 1 || dotpos - atpos < 2 || input.length - dotpos <= 2)
		{
			alert("Please enter a valid email address.");
			return false;
		} else {
			alert("Successly sent your message.");
			document.getElementById("contactForm").submit();
			return true;
		}
	}
</script>

<div class="main">
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>About Axis Solutions</h3>
			</div>
			<div class="panel-body">
				<div style="text-align:center;">
					<img src="images/axis.png" style="width:70%;"/>
				</div>
				<div style="text-align:justify;">
					Axis Solutions is a group of third year Information Systems student studying at UNSW.
					Our diverse skills set have enabled us to be super AWESOME. 
					<br />
					<br />Disclaimer: This is a student assignment for INFS3611, it is in no way associated with UNSW.
					All external libraries and graphical resources, as credited on this page, remain the property of
					their respective authors as per their licenses.
				</div>
			</div>
		</div>
	

		<div class="panel panel-default">
			<div class="panel-heading"><h3>User Document</h3></div>
			<div class="panel-body">
				We have produced a <a href="https://www.dropbox.com/s/1va82c65zfhofxt/vCrew%20Updated%20User%20Guide.pdf" target="_blank">user guide</a> and <a href="https://docs.google.com/document/d/1m8zQ0QK2AJvhTQvDNrn7D0ENcq1sUSX4wUyfL66mR4Y/pub" target="_blank">FAQ document</a>.
			</div>
		</div>
	</div>



	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading"><h3>About vCrew</h3></div>
			<div class="panel-body" style="text-align:justify;">
				vCrew is a platform where students and societies of UNSW can apply for and post up volunteering opportunities respectively. This platform will benefit student societies as it allows them to find the right volunteer with the skill set needed. Furthermore, it will reduce time and costs associated with marketing said volunteering position. This will also be advantageous for students who are having trouble finding a volunteering oportunity in the campus. By volunteering, students may gain experience needed in the real world, thus improving their employability.
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading"><h3>Credits</h3></div>
			<ul class="list-group">
				<li class="list-group-item">Background: <em><a href="http://subtlepatterns.com/giftly/">Giftly</a></em> by Hesam Keramati, CC BY-SA 3.0
				<li class="list-group-item">GUI framework: <em><a href="http://getbootstrap.com/about/">Bootstrap.js</a></em>, MIT license
				<li class="list-group-item">Comboboxes: <em><a href="http://ivaynberg.github.io/select2/">Select2</a></em> by Igor Vaynberg, Apache 2.0 / GPL 2.0
				<li class="list-group-item">Datepickers: <em><a href="https://github.com/eternicode/bootstrap-datepicker">bootstrap-datepicker</a></em> by Andrew Rowls, Apache 2.0
				<?php // <li class="list-group-item">Carousel plugin provided by <a href="https://github.com/codrops/Elastislide"><em>Elastislide</em></a> by Codrops, MIT license ?>
				<li class="list-group-item">Icon sets: <em><a href="http://www.fatcow.com/free-icons">Farm Fresh</a></em> and <em><a href="http://p.yusukekamiyamane.com/">Fugue</a></em>, both CC BY 3.0
				<li class="list-group-item">Typeface: <em><a href="http://sourceforge.net/adobe/sourcesans/wiki/License/">Source Sans Pro</a></em> by Adobe, SIL Open Font license
			</ul>
		</div>

	</div>
	</div>	
</div>
<?php include('includes/common_page_end.php'); ?>
