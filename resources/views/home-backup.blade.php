@extends('layouts.main')

@section('title', 'Kuitansiku')

@section('content')

@include('layouts.header')

<script>alert("this web is underconstruct");</script>
<div id="flex-box" class="normal-scroll-item" >
	<div id="particles-js"></div>
	<section id="intro">
		<div class="container d-flex h-100">
			<div class="d-flex h-100">
				<div class="row align-self-center">
					<div class=" col-md-6 intro-info order-md-first order-last">
						<div class="pointer_true">
							<h2>Aplikasi Kasir<br>Point of Sale</h2>
							<p>Pesatkan usahamu bersama sistem Point of Sale dari Kuitansiku, dengan berbagai fitur yang canggih dan bersahabat
							menjadikanmu mudah mengelola usaha.</p>
					 
							<div style="color:#bbb;">
								<!-- <a style="display: inline-block" href="/user/log" class="btn-get-started scrollto ">Coba Sekarang</a> -->
								<a href="/user/log" class="sparkwise">Coba Sekarang</a>
								<a href="#" onclick="play_video()" data-toggle="tooltip" title="play demo video.." class="video-play-button"><span></span></a>
								play demo video..
							</div>
						</div>
					</div>
					<div class="wow fadeInRight img-container col-md-6 intro-info order-md-first order-last" style="position:relative">
							
						<img class="img-fluid-komputer pull-right" src="{{asset('assets/image/komputer.svg')}}"  alt="" >            
						<img class="tablet img-fluid-phone" data-wow-delay="0.8s" src="{{asset('assets/image/hp-real-1.svg')}}" alt="" style="right:5%;position: absolute;bottom:0px;">
						<img class="printer img-fluid-printer" data-wow-delay="0.8s" src="{{asset('assets/image/printer.svg')}}" alt="" style="right:50%;position: absolute;bottom:0px;">
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
<script src=" {{asset('js/jumbotron/particles.min.js')}}"></script>
<script src=" {{asset('js/jumbotron/app_animation.js')}}"></script>

<section id="video_container" class="bg-linear-yellowsoft normal-scroll-item">
<div class="container video_content pt-3">	
	<button type="button" class="close" id="span_close">×</button>
		<header class="section-header pt-3 text-white"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<h3>Video</h3>
		</header>

		<div class="row feature-item pb-4">
			<div class="col-lg-6 text-grey vid_ket">
				<h2>How It Works</h2>
				<p>
					Banyak keuntungan yang akan anda rasakan 
				</p>
			</div>
			<div class="col-lg-6 pt-lg-0 align-content-center">
				<iframe class="yt_vid rounded" width="100%" height="315" src="https://www.youtube.com/embed/CdBA56lozxc?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
</section>

<section id="features" class="section-bg">
		
			<div class="feature-item section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
							<img src="{{asset('assets/image/usaha.svg')}}" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6 pt-lg-0 order-2 order-lg-1">
							<div class="palate">
								<h2>Mendukung setiap Usaha Anda</h2>
								<p>
									Berbagai jenis usaha mulai dari warung, toko, barbershop, kedai, restoran hingga penginapan, semua bisa kamu
									kelola dengan kuitansiku, dengan 3 langkah mudah kamu bisa langsung mulai berjualan.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-item section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 wow fadeInUp">
							<img src="{{asset('assets/image/aman.svg')}}" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6 pt-lg-0">
							<div class="palate">
								<h2>Pembayaran yang Aman dan Gampang</h2>
								<p>
									Kami mengerti kebutuhan akan kecepatan dan kemudahan bertransaksi oleh karena itu kami juga menyediakan
									pembayaran non-tunai melalui uang elektronik. sehingga transaksi tidak ribet tanpa menghitung refund.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-item section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
							<img src="{{asset('assets/image/transaksi.svg')}}" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6 pt-lg-0 order-2 order-lg-1">
							<div class="palate">
								<h2>Bukti Transaksi yang Ramah Lingkungan</h2>
								<p>
									Tanda telah melakukan transaksi kepada konsumen itu sangatlah penting, sebab itu diberikannya bukti
									transaksi (nota), oleh sebab itu kuitansiku dapat memberikan bukti transaksi melalui aplikasi chat digital
								seperti Whatsapp, Email, dll. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-item section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 wow fadeInUp">
							<img src="{{asset('assets/image/informasi.svg')}}" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6 pt-lg-0">
							<div class="palate">
								<h2>Pencatatan Informasi</h2>
								<p>
									Analisis data yang akurat pada setiap informasi yang didapat, seperti penjualan, presensi karyawan, dan stock
									barang semua dapat terdata dalam sistem. Sehingga membantu dalam memanajemen karyawan, keuangan, dan barang.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-item section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
							<img src="{{asset('assets/image/internet.svg')}}" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6 pt-lg-0 order-2 order-lg-1">
							<div class="palate">
								<h2>Tetap berkerja walau Internet padam</h2>
								<p>
									Kami sedih apabila internet anda mati, oleh sebab itu kami menyematkan penyimpanan sementara pada komputer
									yang aktif apabila Internet tiba-tiba putus, kemudian
									mengunggahnya setelah internet kembali menyala.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-item section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 wow fadeInUp">
							<img src="{{asset('assets/image/kasbon.svg')}}" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6 pt-lg-0">
							<div class="palate">
								<h2>Catatan Kasbon agar Usahamu tetap Lancar
								</h2>
								<p>
									Report kegiatan usahamu disajikan dalam tampilan yang nyaman dan dengan hasil yang akurat dan dapat di atur
									untuk laporan jangka waktu tertentu.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		
</section>
@include('menu.testimoni')
<section id="download" class="bg-linear-yellowsoft normal-scroll-item">
	<div class="container mt-3">
		<header class="section-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<h3>Download</h3>
		</header>
		<div class="row feature-item">
			<div class="col-lg-6 phone-img fadeInUp">
				<img src="{{asset('assets/image/download.svg')}}" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 pt-lg-0">
				<h2>Permudah Oprasional anda menggunakan Aplikasi</h2>
				<p>
						jadikan kuitansiku berada di gengaman anda , segera download dan rasakan kemudahannya </p>
				<div class="row-lg-6 image-data">
					<a href=""> <img src="{{asset('assets/image/apk.svg')}}" alt=""></a>
					<a href=""><img src="{{asset('assets/image/ios.svg')}}" alt=""></a>
				</div>
			</div>
		</div>
	</section>

	<section id="contact" class="section-bg normal-scroll-item">
		<header class="container section-header">
			<h3>Customer Service</h3>
			<p>untuk meningkatkan layanan, kami akan selalu siap sedia mendengar tanggapan kritik serta saran kamu dengan cara mengisikan form dibawah ini</p>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 wow fadeInUp">
					<img src="{{asset('assets/image/contact.svg')}}" class="img-fluid" alt="">
				</div>

				<form action="" method="post" role="form" class="contactForm">
					<div class="form-group">
						<input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email"
						data-msg="Please enter a valid email" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
						data-msg="Please enter at least 8 chars of subject" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<textarea class="form-control" name="message" rows="5" data-rule="required"
						data-msg="Please write something for us" placeholder="Message"></textarea>
						<div class="validation"></div>
					</div>

					<button onclick="kirim()" type="button" class="btn btn-outline-success mb-2">Send Message</button>
					<script>
					function kirim(){
				alert("bisa diclick");
				var nama = $("[name = 'nama']").val();
		var email = $("[name = 'email']").val();
		var subject = $("[name = 'subject]").val();
		var pesan = $("[name = 'message']").val();
			$.ajax({
			type : "POST",
			data :"namasnd="+nama+"emailsnd="+email+"subjectsnd="+subject+"pesansnd="+pesan+,
			url : "/kirim",
			success : function(data)
			{
					$("input").val("");
				$("textarea").val("");
				alert("pasanmu berhasil dikirim");
			},
			error: function()
			{
				alert("oops, ada yang salah, tetap tenang");
			}

		});
		$.ajax({
			type : "POST",
			data :"namasnd="+nama+"emailsnd="+email+"subjectsnd="+subject+"pesansnd="+pesan+,
			url : "kirim",
			success : function(data)
			{
					$("input").val("");
				$("textarea").val("");
				alert("pasanmu berhasil dikirim");
			},
			error: function()
			{
				alert("oops, ada yang salah, tetap tenang");
			}

		});
		}
					</script>

				</form>

			</div>
		</div>
	</section>
@include('menu.footer')
		@endsection