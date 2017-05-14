<div class="clearfix">
</div>
<div class="container-user">
	<div class="paddingTop4P">
		<h4 class="heading">
			Buat Akun Dan Bergabung Bersama krafIDEA.co.id
		</h4>
	</div>
	<div id="signupPage1" class="signupPage" >
		<div class="row">
			<span class="floatmiddle">
				<span class="row flexRow">
					<span class="steps">Informasi Login</span>
					<span class="dashed"></span>
					<span class="steps outSteps">Informasi Vendor</span>
				</span>
			</span>
		</div>
		<div class="row marginTop2P">
			<div class="floatCenter">
				<p class="heading"> Lengkapi informasi dibawah untuk login sebagai vendor</p>
			</div>
		</div>
		<div class="row">
			<span class="floatCenter containerSpan">
				<div class="containerSpan-div">
					<form>
						<div class="row formGroup paddingTop6P margin_x8x8">
							<label class="formLabel">EMAIL*</label>
							<input class="formInput" placeholder="Masukan Alamat Email Anda" />
						</div>
						<div class="row formGroup paddingTop6P margin_x8x8">
							<label class="formLabel">PASSWORD*</label>
							<input class="formInput" placeholder="Masukan Password Anda" />
						</div>
						<div class="row formGroup paddingTop6P margin_x8x8">
							<label class="formLabel">KONFIRMASI PASSWORD*</label>
							<input class="formInput" placeholder="Masukan Ulang Password Anda" />
						</div>
						<div class="row formGroup paddingBottom6P margin_48x8">
							<span class="textCenter">
								<input type="button" value="Daftarkan Email dan Lanjutkan" class="submitButton btn btn-primary btn-Span" id="submittest">
							</span>
						</div>
					</form>
				</div>
			</span>
		</div>
	</div>
	<div id="signupPage2" class="signupPage">
		<div class="row">
			<span class="floatmiddle">
				<span class="row flexRow">
					<!-- <span class="steps">Informasi Login</span> -->
					<span class="stepsCheck">
						<!-- <span>Informasi Login</span> -->
						<i class="fa fa-check" aria-hidden="true"></i>
					</span>
					<span class="dashed"></span>
					<span class="steps">Informasi Vendor</span>
				</span>
			</span>
		</div>
		<div class="row marginTop2P">
			<div class="floatCenter">
				<p class="heading"> Lengkapi informasi dibawah untuk informasi vendor anda</p>
			</div>
		</div>
		<div class="row">
			<span class="floatCenter containerSpan">
				<div class="containerSpan-div">
					<form>
						<div class="row formGroup paddingTop6P margin_x8x8">
							<label class="formLabel">INFORMASI TENTANG VENDOR*</label>
							<input class="formInput" placeholder="INFORMASI TENTANG VENDOR" />
						</div>
						<div class="row formGroup paddingTop6P margin_x8x8">
							<label class="formLabel">INFORMASI TENTANG VENDOR*</label>
							<input class="formInput" placeholder="INFORMASI TENTANG VENDOR" />
						</div>
						<div class="row formGroup paddingTop6P margin_x8x8">
							<label class="formLabel">INFORMASI TENTANG VENDOR*</label>
							<input class="formInput" placeholder="INFORMASI TENTANG VENDOR" />
						</div>
						<div class="row formGroup paddingBottom6P margin_48x8">
							<span class="textCenter">
								<input type="submit" value="Daftarkan Email dan Lanjutkan" class="submitButton btn btn-primary btn-Span">
							</span>
						</div>
					</form>
				</div>
			</span>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#signupPage2').hide();
	});

	$("#submittest").on("click", function(){
    	$('#signupPage2').show();
    	$('#signupPage1').hide();
    }); 
</script>