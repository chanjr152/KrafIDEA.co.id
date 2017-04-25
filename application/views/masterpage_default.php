
<!DOCTYPE html>
<html>
<head>
<title>Lighting A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url("assets/css/style.css"); ?>"  rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url("assets/added/carousel.css"); ?>"  rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url("assets/added/mobileFilter.css"); ?>"  rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url("assets/added/mobileMainMenu.css"); ?>"  rel="stylesheet" type="text/css" media="all"/>
<!-- <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>" ></script> -->

<!-- Font Awesome Icons -->
<link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="<?php echo base_url('assets/ionicons-2.0.1/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url("assets/js/jQuery-2.1.3.min.js"); ?>" ></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- <script src="<?php echo base_url("assets/js/simpleCart.min.js");?>" ></script> -->
<link href= "<?php echo base_url("assets/css/memenu.css"); ?>" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url("assets/js/memenu.js"); ?>" ></script>
<script>
	$(document).ready(function(){
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

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    $(evt).addClass("active");
}
</script>
<style type="text/css">
	.no-padding{
		padding: 0;
	}

 /* Style the tab */
div.tab {
    float: left;
    /*border: 1px solid #ccc;*/
    background-color: #f1f1f1;
    width: 0;
    /*height: 300px;*/
    border-right: solid 1px #ccc;
    border-top: solid 1px #ccc;
}

/* Style the buttons inside the tab */
div.tab button{
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    border: 1px solid #ccc;
    border-right: none;
    border-top: none;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    /*background-color: #ccc;*/
    background-color: #fff;
    /*border-right-color: #fff;
    border-right-width: 1px;*/
    margin-left: 1px;
}

/* Style the tab content */
.tabcontent {
    float: left;
    /*padding: 0px 12px; default */
    padding: 1em;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
    /*margin-left:45%;*/
    background-color: #fff;
}

/* added */
.tabcontent h4{
	border-bottom: solid 1px #ccc;
	padding: 10px;
}
</style>
</head>
<body> 
<script type="text/javascript" src="<?php echo base_url("assets/added/carousel.js"); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url("assets/added/mobileFilter.js"); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url("assets/added/mobileMainMenu.js"); ?>" ></script>
<!-- <script src="<?php echo base_url("assets/js/responsiveslides.min.js"); ?>"></script> -->

<div id="myDisplay" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">tutup [&times;]</a>
	<div class="tab">
		<button class="tablinks" onclick="openCity(this, 'London')">VIEW</button>
		<!-- <button class="tablinks" onclick="openCity(this, 'Paris')">Paris</button>
		<button class="tablinks" onclick="openCity(this, 'Tokyo')">Tokyo</button> -->
	</div>

	<div id="London" class="tabcontent">
		<h4>Designer</h4>
		<h4>Artist</h4>
		<h4>Brand</h4>
	</div>
</div>

<div id="myCategory" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">tutup [&times;]</a>
	<div class="tab">
		<button class="tablinks" onclick="openCity(this, 'Category')">SHOP</button>
		<!-- <button class="tablinks" onclick="openCity(this, 'Paris')">Paris</button>
		<button class="tablinks" onclick="openCity(this, 'Tokyo')">Tokyo</button> -->
	</div>

	<div id="Category" class="tabcontent">
		<h4>Furniture</h4>
		<h4>Accecories</h4>
		<h4>Artwork/Decorative</h4>
	</div>
</div>

<div id="myStyle" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">tutup [&times;]</a>
	<div class="tab">
		<button class="tablinks" onclick="openCity(this, 'Style1')">FURNITURE</button>
		<button class="tablinks" onclick="openCity(this, 'Style2')">ACCECORIES</button>
		<button class="tablinks" onclick="openCity(this, 'Style3')">ARTWORK/DECORATIVE</button>
		<!-- <button class="tablinks" onclick="openCity(this, 'Paris')">Paris</button>
		<button class="tablinks" onclick="openCity(this, 'Tokyo')">Tokyo</button> -->
	</div>

	<div id="Style1" class="tabcontent">
		<h4>Chair</h4>
		<h4>Sofa</h4>
		<h4>Bench</h4>
		<h4>Table</h4>
	</div>
	<div id="Style2" class="tabcontent">
		<h4>Easy Chair</h4>
		<h4>Arm Chair</h4>
		<h4>Wing Chair</h4>
	</div>
	<div id="Style3" class="tabcontent">
		<!-- <h4>Easy Chair</h4>
		<h4>Arm Chair</h4>
		<h4>Wing Chair</h4> -->
	</div>
</div>

<div id="myPrice" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">tutup [&times;]</a>
	<div class="tab">
		<button class="tablinks" onclick="openCity(this, 'Price1')">PRICE</button>
		<!-- <button class="tablinks" onclick="openCity(this, 'Paris')">Paris</button>
		<button class="tablinks" onclick="openCity(this, 'Tokyo')">Tokyo</button> -->
	</div>

	<div id="Price1" class="tabcontent">
		<!-- <h4>Designer</h4>
		<h4>Artist</h4>
		<h4>Brand</h4> -->
	</div>
</div>

<!-- </div> -->
 
<!-- all page content inside this div want the side nav to push page content to the right -->
<div id="main">

<div class="header-top hidden-xs">
	<div class="top-nav-left">
		<div class="logo">
			<h1><a href="#">KrafIDEA.co.id</a></h1>
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
</div>

<div class="customNav visible-xs">
	<div class="customNav-logo">
		KrafIDEA.co.id
	</div>
	<div class="dropdown">
		<button onclick="myFunction1()" class="dropbtn">icon</button>
		<div id="myDropdown" class="dropdown-content">
			<a href="javascript:void(0)">Blog</a>
			<a href="javascript:void(0)">Promo</a>
			<a href="javascript:void(0)">Event</a>

			<button class="accordion">Dropdown</button>
			<div class="panel">
				<div class="vertical-menu">
					<!-- <a href="#" class="active">Home</a> -->
					<a href="javascript:void(0)">Link 1</a>
					<a href="javascript:void(0)">Link 2</a>
					<a href="javascript:void(0)">Link 3</a>
					<a href="javascript:void(0)">Link 4</a>
				</div>
			</div>

			<a href="javascript:void(0)">Daftar Member</a>
			<a href="javascript:void(0)">Daftar Panel</a>
		</div>
	</div>
</div>

<div class="clearfix"></div>

<mp:Content />



<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 about-us">
				 <h3>About Us</h3>
				 <p>Maecenas nec auctor sem. Vivamus porttitor tincidunt elementum nisi a, euismod rhoncus urna. Curabitur scelerisque vulputate arcu eu pulvinar. Fusce vel neque diam</p>
			 </div>
			 <div class="col-md-3 ftr-grid">
					<h3>Information</h3>
					<ul class="nav-bottom">
						<li><a href="#">Track Order</a></li>
						<li><a href="#">New Products</a></li>
						<li><a href="#">Location</a></li>
						<li><a href="#">Our Stores</a></li>
						<li><a href="#">Best Sellers</a></li>	
					</ul>					
			 </div>
			 <div class="col-md-3 ftr-grid">
					<h3>More Info</h3>
					<ul class="nav-bottom">
						<li><a href="login.html">Login</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>	
					</ul>					
			 </div>
			 <div class="col-md-3 ftr-grid">
					<h3>Categories</h3>
					<ul class="nav-bottom">
						<li><a href="#">Car Lights</a></li>
						<li><a href="#">LED Lights</a></li>
						<li><a href="#">Decorates</a></li>
						<li><a href="#">Wall Lights</a></li>
						<li><a href="#">Protectors</a></li>	
					</ul>					
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div> 

</div>
<!--/ all page content inside this div want the side nav to push page content to the right -->

</body>
</html>
