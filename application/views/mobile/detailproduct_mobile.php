<link rel="stylesheet" type="text/css" href="<?=base_url('assets/added/page/detailproductMobile.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/added/page/supplierMobile.css');?>">
<div class="container visible-xs">
	<div class="mobile-profil-cst col-xs-12">
		<img src="<?=base_url('assets/images/slider/bnr.jpg');?>" class="img-circle img-cst" alt="Profil Supplier" width="131px" height="131px">
		<div class="info-part1-cst">
			<p class="part1-cst"><strong>WH (Wrong for Hay)</strong></p>
			<p>Designer Product</p>
		</div>
		<div class="info-part2-cst">
			<label><i class="fa fa-map fa-lg" aria-hidden="true"></i> Bandung, Jawa Barat <br> Jl. Gatot Subroto No.68</label>
			<label style="float:right;">240</label>
			<label><i class="fa fa-eye fa-lg" aria-hidden="true"></i> Display Views</label>
			<label style="float:right;">240</label>
			<label><i class="fa fa-thumbs-o-up fa-lg" aria-hidden="true"></i> Appreciations</label>
			<label style="float:right;">240</label>
			<label><i class="fa fa-sign-language fa-lg" aria-hidden="true"></i> Transactions</label>
		</div>
		<div class="info-part3-cst">
			<label>W : www.wh.com </label>
			<label>E : WH@info.com </label>
			<label>P : +62852669005 </label>
			<label>S : <i class="fa fa-instagram fa-lg" aria-hidden="true"> &nbsp;</i> <i class="fa fa-facebook fa-lg" aria-hidden="true"> </i> </label>
		</div>
		<div class="info-part4-cst">
			<label>Share</label>
			<label><i class="fa fa-instagram fa-lg"></i>&nbsp;<i class="fa fa-facebook-square fa-lg"></i>&nbsp;<i class="fa fa-twitter-square fa-lg"></i> </label>
		</div>
	</div>
</div>
<div class="container visible-xs">
	<div class="slideshow-container">
	 	<?php echo $product ?>
		<a class="prev" onclick="plusSlides(this, -1)">&#10094;</a>
		<a class="next" onclick="plusSlides(this, 1)">&#10095;</a>
	 </div>
	<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span> 
		<span class="dot" onclick="currentSlide(2)"></span> 
		<span class="dot" onclick="currentSlide(3)"></span> 
	</div>
</div>