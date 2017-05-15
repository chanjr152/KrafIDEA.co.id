
<!DOCTYPE html>
<html>
<head>
<title>krafIDEA.co.id</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url("assets/css/style.css"); ?>"  rel="stylesheet" type="text/css" media="all"/>

<!-- by debruin -->
<link href="<?php echo base_url("assets/css/font-awesome/css/font-awesome.min.css"); ?>"  rel="stylesheet" media="all"/>

<!-- kebutuhan per page -->
<link href= "<?php echo base_url("assets/css/memenu.css"); ?>" rel="stylesheet" type="text/css" media="all"/>
<link href= "<?php echo base_url("assets/added/komponen/mobile-navbar.css"); ?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url("assets/added/mobileFilter.css"); ?>"  rel="stylesheet" type="text/css" media="all"/>

<script src="<?php echo base_url("assets/js/jQuery-2.1.3.min.js"); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>" ></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- <script src="<?php echo base_url("assets/js/simpleCart.min.js");?>" ></script> -->
<script type="text/javascript" src="<?php echo base_url("assets/js/memenu.js"); ?>" ></script>
<script>
	$(document).ready(function(){
		checkWidth();

		$(".memenu").memenu(); $("a.prev").click();
		/* DROPDOWN */
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].onclick = function() {
		    this.classList.toggle("active");
		    var panel = this.nextElementSibling;
		    if (panel.style.maxHeight){
		      panel.style.maxHeight = null;
		    } else {
		      panel.style.maxHeight = panel.scrollHeight + "px";
		    } 
		  }
		}
	});

	$(window).resize(function(){
		checkWidth();
	});

	function checkWidth(){
		if ($(window).width() < 767) {
			$("body").css("padding-top","50px");
		}
		else{
			$("body").css("padding-top","0");
		}
	}
</script>

<style type="text/css">
	@media (max-width: 720px){
		body{
			font-size: 12px;
		}
	}
	.no-padding{
		padding: 0;
	}
</style>
</head>
<body>
<?php 
	$controller= $this->uri->segment(1);
	if($controller != ""){
		echo '<div class="page-bg"></div> '; 
	}
?>
<script type="text/javascript" src="<?php echo base_url("assets/added/mobileFilter.js"); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url("assets/added/komponen/mobile-navbar.js"); ?>" ></script>

<?php $this->load->view("komponen/filterhomeMobile"); ?>

<!-- </div> -->
 
<!-- all page content inside this div want the side nav to push page content to the right -->
<div id="main">

<!-- <div class="header-top hidden-xs">
	<div class="top-nav-left">
		<div class="logo">
			<h1><a href="<?=base_url();?>">krafIDEA.co.id</a></h1>
		</div>
	</div>
		<div class="top-nav-center">
			<ul class="memenu skyblue">
				<li class="active"><a href="index.html">Blog</a></li>
				<li class="grid"><a href="#">Promo</a></li>
				<li class="grid"><a href="#">Event</a></li>
			</ul>				
		</div>
	<div class="top-nav-right">
		<input type="text" placeholder="search" />
		<a href="#">DAFTAR PANEL</a>
		<a href="#">DAFTAR MEMBER</a>
	</div>
</div> -->

<?php $this->load->view("komponen/topnavbarMobile"); ?>

<div class="clearfix"></div>

<mp:Content />

<div class="footer">
	 <div class="container">
		 <div class="footer-grids text-center">
			 &copy; krafIDEA.com
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div> 

</div>
<!--/ all page content inside this div want the side nav to push page content to the right -->

</body>
</html>
