
<div class="slider">
	<!-- <div class="banner-info">
                        <ul>
                            <li class="grid"><a href="#">Home</a></li>
                            <li class="grid"><a href="#">Products</a></li>
                            <li class="grid"><a href="#">Accessories</a></li>
                            <li class="grid"><a href="typo.html">Typo</a></li>
                            <li class="grid"><a href="contact.html">Contact</a></li>                    
                        </ul>   
                    </div>  -->
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	     	<?php echo $slide ?>
	      </ul>
	  </div>
 </div>
<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>" ></script>

<div class="filter1">
		<ul class="container-filter1">
			<li class="active"><a href="index.html">Display <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span></a></li>
			<li class="grid"><a href="#">Category <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span></a></li>
			<li class="grid"><a href="#">Style <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span></a></li>
			<li class="grid"><a href="typo.html">Price <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span></a></li>					
		</ul>
</div>
<div class="clearfix"></div>

<div class="items">
	 <div class="container">
		 <div class="items-sec">
			 <?php echo $product ?>
	 	</div>
	</div> 
</div>
