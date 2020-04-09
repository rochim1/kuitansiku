<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Required meta tags -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="{{asset('assets/image/logo.ico')}}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css') }}">
	<!-- Main Stylesheet File -->
	<!-- <link href="{{asset('css/login/main.css')}}" rel="stylesheet"> -->
	<link href="{{asset('css/keyframe.css') }}" rel="stylesheet">
	<link href="{{asset('css/beranda.css') }}" rel="stylesheet">
	<link href="{{asset('css/header.css') }}" rel="stylesheet">
	<link href="{{asset('css/styleanim.css') }}" rel="stylesheet">
	<link href="{{asset('css/util_login_form.css') }}" rel="stylesheet">
	<!-- <link href="{{asset('css/examples.css') }}" rel="stylesheet"> -->
	<!-- <link href="{{asset('css/fullpage.css') }}" rel="stylesheet"> -->
	<!-- <link href="{{asset('css/style-modal.css') }}" rel="stylesheet"> -->
	<!-- <link href="{{asset('css/windows.css') }}" rel="stylesheet"> -->
	<link href="{{asset('css/testimonial.css') }}" rel="stylesheet">
	<!-- Font Stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
	<link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
	<link href="{{asset('lib/animate/animate.css')}}" rel="stylesheet">

	<title>@yield('title')</title>
</head>

	
<body data-spy="scroll" data-target=".nav-main" >
<div id="loading" class="w-100 bg-white" style="z-index:1000">
  <div class="panel active ">
    <div class="svg-path d-flex justify-content-center">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="81px" height="81px" viewBox="0 0 81 81" style="enable-background:new 0 0 81 81;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:none;}
            </style>
            <defs>
            </defs>
            <path id="Group_1194_1_" transform="translate(-61 -49)" class="st0" d="M75,49h53c7.73,0,14,6.27,14,14v53c0,7.73-6.27,14-14,14H75
                c-7.73,0-14-6.27-14-14V63C61,55.27,67.27,49,75,49z M92.25,97.4l5.44,7.72h-9.48l-5.44-7.72L77,89.21L88.43,73h9.48L86.48,89.21
                L92.25,97.4z M125.99,77.9v18.76c-0.02,4.69-3.83,8.48-8.52,8.46c0,0,0,0,0,0h-14.8l-5.44-7.72l-5.9-8.37L102.63,73h9.48
                l-11.3,16.03l5.9,8.37h7.9c1.99,0.01,3.61-1.6,3.61-3.59c0,0,0,0,0,0V77.94l3.85,2.68L125.99,77.9z M125.99,73v2.6l-3.92,2.72
                l-3.85-2.68V73H125.99z"/>
        </svg>
      </div>
    </div>
  </div>
</div>
<!-- untuk preloader -->
	@yield('content')
	<!-- JavaScript Libraries-->
	<script src=" {{asset('lib/jquery/jquery.min.js')}}"></script>
	
	<!-- <script src=" {{asset('lib/jquery/jquery-migrate.min.js')}}"></script>  mengganggu scrollify-->
	<script src=" {{asset('js/main.js')}}"></script>
	<script src=" {{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
	<script src=" {{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src=" {{asset('lib/easing/easing.min.js')}}"></script>
	<script src=" {{asset('lib/mobile-nav/mobile-nav.js')}}"></script>
	<script src=" {{asset('lib/wow/wow.min.js')}}"></script>
	<script src=" {{asset('lib/waypoints/waypoints.min.js')}}"></script>
	<script src=" {{asset('lib/counterup/counterup.min.js')}}"></script>
	<script src=" {{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
	<!-- <script src=" {{asset('lib/lightbox/js/lightbox.min.js')}}"></script> -->
	<script src="{{asset('js/scrollspy.js')}}"></script>
	<script src="{{asset('js/jquery.scrollify.js')}}"></script>
	<script src="{{asset('js/footer-reveal.min.js')}}"></script>
	<!-- <script src="{{asset('lib/onescroll/fullpage.js')}}"></script> -->
	<script>
		window.onload = function preloader() { 
			
				function drawSvg() {
					const $panel = $('.panel');

					function drawSVGPaths(_parentElement, _time) {
						const paths = $(_parentElement).find('path');

						paths.toArray().forEach(el => {
						const $el = $(el);
						const isUp = $('body').hasClass('up');
						const totalLength = isUp ? -el.getTotalLength() : el.getTotalLength();

						$el.css({
							strokeDashoffset: totalLength,
							strokeDasharray: `${Math.abs(totalLength)} ${Math.abs(totalLength)}`
						});

						$el.animate(
							{ strokeDashoffset: 0 },
							{ duration: _time }
						);
						});
					}

					function startSVGAnimation(parentElement) {
						drawSVGPaths(parentElement, 1500);
					} 

					function drawSvgInActivePanel() {
						$panel.toArray().forEach(el => $(el).hasClass('active') && startSVGAnimation($(el).find('svg')));
					}
					
					 setTimeout(()=>{
					$panel.toArray().forEach(el => {
					$('svg').addClass('fade-in');
					})
					}, 1700);

					drawSvgInActivePanel();
				}
				drawSvg();

				setTimeout(function(){
				$('#loading').slideUp("slow");
				},); 

				// function loopFunction(delay, callback){
				// 	var loop = function(){
				// 		callback();
				// 		setTimeout(loop, delay);
				// 	}; loop();
				// };

				// loopFunction(100, function(){
				
				// });

		} 
	</script>
	<script> 
		$(".hme").click(function(){
			$(".mobile-nav-toggle")[0].click();
			$('html, body').animate({
				scrollTop: $("#intro").offset().top
			}, 1000)
		});
		$(".ftr").click(function(){
			$(".mobile-nav-toggle")[0].click();
			$('html, body').animate({
				scrollTop: $("#features").offset().top
			}, 1000)
		});
		$(".test").click(function(){
			$(".mobile-nav-toggle")[0].click();
			$('html, body').animate({
				scrollTop: $("#testimoni").offset().top
			}, 1000)
		});
		$(".cnt").click(function(){
			$(".mobile-nav-toggle")[0].click();
			$('html, body').animate({
				scrollTop: $("#contact").offset().top
			}, 1000)
		});
		$(".serv").click(function(){
			$(".mobile-nav-toggle")[0].click();
			$('html, body').animate({
				scrollTop: $("#our_service").offset().top
			}, 1000)
		});

		$(".dload").click(function(){
			$('.mobile-nav-toggle')[0].click();
			$('html, body').animate({
				scrollTop: $("#download").offset().top
			}, 1000)
		});
	</script>

<script>
// Repeat demo content
  var $body = $('body');
  var $box = $('section');
  // Helper function for add element box list in WOW
  WOW.prototype.addBox = function(element) {
	this.boxes.push(element);
  };
  // Init WOW.js and get instance
  var wow = new WOW();
//   $(document).ready(function()
// 	{
	//  sudah di deklarasikan din main.js
// 	wow.init();
// 	});

  // Attach scrollSpy to .wow elements for detect view exit events,
  // then reset elements and add again for animation
// repeat wow.js every scrollspy
//   $('.wow').on('scrollSpy:exit', function() {
// 	$(this).css({
// 	  'animation-name': 'none',
// 	  'visibility': 'hidden'
// 	}).removeClass('animated');
// 	wow.addBox(this);
//   }).scrollSpy();

  // menu navigasi 
  
    
	</script>

</body>



</html>
<script type="text/javascript">
				var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
				(function(){
					var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
					s1.async=true;
					s1.src='https://embed.tawk.to/5d500d66eb1a6b0be606ff68/default';
					s1.charset='UTF-8';
					s1.setAttribute('crossorigin','*');
					s0.parentNode.insertBefore(s1,s0);
				})();
</script>