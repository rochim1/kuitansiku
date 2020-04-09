<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="{{asset('assets/image/logo.ico')}}">
	<title>kuitansiku | Login Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css') }}">
	<link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/css/custom.css')}}" rel="stylesheet">
	<link href="{{asset('css/util_login_form.css') }}" rel="stylesheet">
	<link href="{{asset('css/css/keyframe.css')}}" rel="stylesheet">
	<link href="{{asset('css/css/hover.css')}}" rel="stylesheet">
	

	
	<script src=" {{asset('lib/jquery/jquery.min.js')}}"></script>
	<script src=" {{asset('js/js/api.js')}}"></script>
	<style>
		html,body
		{
			width:100%;
			/* overflow-x: hidden; */
		}
	</style>

	</head>
	<body id="login_page" class="bg-light">
		<div class="position-relative">
			<div class="top"> 
				<div class="layer position-absolute h-100 w-100 bg-linear-yellowsoft"></div> 
			</div>
			<div class="download_bg ">
			</div>
		</div>

			<section class="position-absolute h-100 w-100 top-0">
				<div class="container-fluid pt-4">
					<div class="container">
						<div class="row pb-5 mb-5">
							<div class="col-md-3">
								<a href="/"><img class="hvr-shrink logo" src="{{asset('assets/image/logo.svg')}}"></a>
							</div>
							<div class="col-md-9" > 
							<div class="selamat">
								<h2 id="welcome">Hi, Selamat Datang</h2>
								<p>
								di Halaman Form User, mari bergabung bersama kami dan manfaatkan beragam fitur <span style="color: orange; font-weight: bold;">Kuitansiku</span> untuk mengembangkan usaha Anda. 
								nikmati kemudahannya, sukses usahanya !</p>
							</div>
						</div>
					</div>
					<div class="row pt-5 mt-5">
						<div class="col-md-12">
							<div class="form_konten">
								<script>
									$(document).ready(function(){
										$('#Login').attr("class","collapse");
										$('#Login').addClass("login");
										$('.modal-dialog').removeClass();
										$('.close').remove();
										$('#daftar_btn').attr("href","#daftar");
									});
								</script>
							@include('ServiceLogin.loginHome')
							@include('ServiceLogin.daftar')
							
							<script src="{{url('js/js/form_steps.js')}}"></script>
							</div>
						</div>
					</div>						
				</div>
			</section>
		<section>
		</section>
			<script src=" {{asset('js/js/custom_login.js')}}"></script>
			
	</body>
	</html>