<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>" ></script>
<!-- <div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	     	<?php echo $slide ?>
	      </ul>
	  </div>
 </div> -->
<div class="slideshow-container">
	<?php echo $slide ?>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<span class="dot" onclick="currentSlide(3)"></span> 
</div>

<div class="filter1" >
		<ul class="container-filter1 hidden-xs">
		<!-- <ul class="memenu skyblue"> -->
			<li class="grid">
				<a href="#">Display <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span></a>
				<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>View</h4>
									<ul>
										<li><a href="product.html" ><span class="glyphicon glyphicon-user"></span> Designer</a></li>
										<li><a href="product.html"><span class="glyphicon glyphicon-user"></span> Artist</a></li>
										<li><a href="product.html"><span class="glyphicon glyphicon-user"></span> Brands</a></li>
									</ul>
								</div>
							</div>
				</div>
			</li>
			<li class="grid"><a href="#">Category <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span></a>
				<div class="mepanel">
					<div class="row">
						<div class="col1 me-one">
							<h4>Shop</h4>
							<ul>
								<li><a href="product.html"><span class="glyphicon glyphicon-user"></span> Furniture</a></li>
								<li><a href="product.html"><span class="glyphicon glyphicon-user"></span> Accecories</a></li>
								<li><a href="product.html"><span class="glyphicon glyphicon-user"></span> Artwork/Decorative</a></li>
							</ul>
					</div>
				</div>
			</li>
			<li class="grid"><a href="#">Style <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span></a>
				<div class="mepanel">
					<div class="row">
						<div class="col1 me-one">
							<h4>Shop</h4>
							<ul>
								<li><a href="product.html"><span class="glyphicon glyphicon-user"></span> Furniture</a></li>
								<li><a href="product.html"><span class="glyphicon glyphicon-user"></span> Accecories</a></li>
								<li><a href="product.html"><span class="glyphicon glyphicon-user"></span> Artwork/Decorative</a></li>
								<table>
										<thead>
											<tr>
											    <th>FURNITURE</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<ul>
														<li><a href="#">Chair</a></li>
														<li><a href="#">Sofa</a></li>
														<li><a href="#">Bench</a></li>
														<li><a href="#">Table</a></li>
													</ul>
												</td>
											</tr>
										</tbody>
								</table>
								<table>
										<thead>
											<tr>
											    <th>FURNITURE</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<ul>
														<li><a href="#">Easy Chair</a></li>
														<li><a href="#">Arm Chair</a></li>
														<li><a href="#">Wings Chair</a></li>
													</ul>
												</td>
											</tr>
										</tbody>
								</table>
							</ul>

					</div>
				</div>
			</li>
			<li class="grid"><a href="typo.html">Price <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span></a>
			</li>					
		</ul>
		
	<div class="scrollmenu text-center visible-xs">
		<span onclick="openNav('myDisplay')" class="fa fa-desktop" style="padding-left: 10px;"><a href="javascript:void(0)">Display</a></span>
		<span onclick="openNav('myCategory')" class="fa fa-cubes" style="padding-left: 10px;"><a href="javascript:void(0)">Category</a></span>
		<span onclick="openNav('myStyle')" class="fa fa-paint-brush" style="padding-left: 10px;"><a href="javascript:void(0)">Style</a></span>
		<span onclick="openNav('myPrice')" class="fa fa-money" style="padding-left: 10px;"><a href="javascript:void(0)">Price</a></span>
	</div>
</div>

<div class="clearfix"></div>

<div class="items">
	 <div class="container">
		 <div class="items-sec">
			 <?php echo $product ?>
	 	</div>
	</div> 
</div>
