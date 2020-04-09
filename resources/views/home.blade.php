@extends('layouts.main')

@section('title', 'Kuitansiku')

@section('content')
<!-- <div id="isi_data"> -->
    <section class="normal-scroll-item">
    @include('layouts.header')
    </section>
    <!-- <script>alert("this web is underconstruct");</script> -->
    <section id="flex-box" class="normal-scroll-item bg-linear-blue-strong" >
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
                                    <a href="/ServiceLogin" class="sparkwise bg-linear-yellowsoft">Coba Sekarang</a>
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

    </section>
    <script src=" {{asset('js/jumbotron/particles.min.js')}}"></script>
    <script src=" {{asset('js/jumbotron/app_animation.js')}}"></script>

    <section id="our_service" class="bg-linear-yellowsoft normal-scroll-item position-relative text-white">
        <div id="video_container"></div>	
        <div>
                <div class="container video_content pt-3 h-100">	
                    <button type="button" class="close position-absolute" id="span_close">×</button>
                        <header class="section-header">
                        <h3>Our Services</h3>
                        </header>
                    <div class="row feature-item pb-5 pt-5">
                        <div class="col-lg-6 vid_ket">

                                <div class="row text-center">
                                    <div class="col-sm-4">
                                        <div class="card border-0 bg-linear-blue"> 
                                        <div class="card-body">
                                            <h5 class="card-title">Users</h5>
                                            <span class="counter" data-toggle="counter-up">
                                                19999
                                            </span>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card border-0 bg-linear-smoth">
                                        <div class="card-body">
                                            <h5 class="card-title">Outlet</h5>
                                            <span class="counter" data-toggle="counter-up">
                                                19999
                                            </span>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card border-0 bg-linear-blue-strong">
                                        <div class="card-body">
                                            <h5 class="card-title">transaction</h5>
                                            <span class="counter" data-toggle="counter-up">
                                                19999
                                            </span>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="col-lg-6 pt-lg-0 align-content-center pt-sm-5 pt-5">
                            <iframe class="yt_vid rounded" width="100%" height="315" src="https://www.youtube.com/embed/CdBA56lozxc?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section id="features" class="section-bg ">
            <div class="container">
                <div class="feature-item section">
                    <!-- <div class="container"> -->
                        <div class="row h-100">
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
                    <!-- </div> -->
                </div>

                <div class="feature-item section">
                    <!-- <div class="container"> -->
                        <div class="row h-100">
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
                    <!-- </div> -->
                </div>

                <div class="feature-item section">
                    <!-- <div class="container"> -->
                        <div class="row h-100">
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
                    <!-- </div> -->
                </div>

                <div class="feature-item section">
                    <!-- <div class="container"> -->
                        <div class="row h-100">
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
                    <!-- </div> -->
                </div>

                <div class="feature-item section">
                    <!-- <div class="container"> -->
                        <div class="row h-100">
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
                    <!-- </div> -->
                </div>

                <div class="feature-item section">
                    <!-- <div class="container"> -->
                        <div class="row h-100">
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
                    <!-- </div> -->
                </div>
            </div>
    </section>
    @include('menu.testimoni')
    <section id="download" class="bg-linear-yellowsoft normal-scroll-item">
        <div class="download_bg"></div>				
        <div>
            <div class="container mt-3">
            <header class="section-header">
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
        </div>
    </section>

    <section id="contact" class="section-bg normal-scroll-item">
            <header class="container section-header text-center">
                <h2 class="font-weight-bold font-size-45 mb-25">Customer Service</h2>
                <p class="font-size-18">untuk meningkatkan layanan, kami akan selalu siap sedia mendengar tanggapan kritik serta saran kamu dengan cara mengisikan form dibawah ini</p>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp">
                        <img src="{{asset('assets/image/contact.svg')}}" class="img-fluid" alt="">
                    </div>

                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control input" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input" name="email" id="email" placeholder="Email" data-rule="email"
                            data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control input" name="message" rows="5" data-rule="required"
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

        <!-- <section id="hardware" class="pt-5 pb-5 normal-scroll-item"> 
            <div class="container">
                <div class="row">
                                <div class="lqd-column col-md-12">

                    <header class="fancy-title text-center mb-50">
                        <h2 class="font-weight-bold font-size-45 mb-25">Beragam perangkat modern</h2>
                        <p class="font-size-18 lh-15 ltr-sp-015">Tinggalkan cara tradisional dan beralih ke majoo, dengan harga terjangkau untuk bisnismu semakin maju</p>
                    </header>

                </div>

                <div class="lqd-column col-md-12">

                    <div class="liquid-blog-grid liquid-blog-style-square row mb-50" data-liquid-masonry="true" style="position: relative; height: 418px;">

                            <div class="perangkat-large col-md-6 masonry-item" style="position: absolute; left: 0px; top: 0px;">

                                <article class="liquid-lp liquid-blog-item liquid-blog-item-square liquid-blog-scheme-light round h-450">

                                    <figure class="liquid-lp-media round">
                                        <a href="https://majoo.id/perangkat">
                                            <img src="https://majoo.id/assets/uploads/home/perangkat/perangkat-1.jpg" alt="Lates Post">
                                            <div class="name">
                                                <span>Paket Standard</span>
                                                <span>Mulai Rp. 2.950.000</span>
                                            </div>
                                        </a>
                                    </figure>

                                </article>

                            </div>

                            <div class="perangkat-small one col-md-3 col-sm-6 masonry-item" style="position: absolute; left: 624px; top: 0px;">

                                <article class="liquid-lp liquid-blog-item d-flex flex-wrap align-items-center">

                                    <a href="https://majoo.id/perangkat">
                                        <img src="https://majoo.id/assets/uploads/home/perangkat/desktop.png" alt="Lates Post">

                                        <div class="name">
                                            <span>Desktop</span>
                                            <span>Mulai Rp. 9.550.000</span>
                                        </div>
                                    </a>

                                </article>

                            </div>

                            <div class="perangkat-small two col-md-3 col-sm-6 masonry-item" style="position: absolute; left: 833px; top: 0px;">

                                <article class="liquid-lp liquid-blog-item d-flex flex-wrap align-items-center">

                                    <a href="https://majoo.id/perangkat">
                                        <img src="https://majoo.id/assets/uploads/home/perangkat/lifestyle.png" alt="Lates Post">

                                        <div class="name">
                                            <span>Lifestyle</span>
                                            <span>Mulai Rp. 9.550.000</span>
                                        </div>
                                    </a>

                                </article>

                            </div>

                            <div class="perangkat-small three col-md-3 col-sm-6 masonry-item" style="position: absolute; left: 624px; top: 209px;">

                                <article class="liquid-lp liquid-blog-item d-flex flex-wrap align-items-center">

                                    <a href="https://majoo.id/perangkat">
                                        <img src="https://majoo.id/assets/uploads/home/perangkat/enibit.png" alt="Lates Post">

                                        <div class="name">
                                            <span>Bluetooth Printer</span>
                                            <span>Mulai Rp. 475.000</span>
                                        </div>
                                    </a>

                                </article>

                            </div>

                            <div class="perangkat-small four col-md-3 col-sm-6 masonry-item" style="position: absolute; left: 833px; top: 209px;">

                                <article class="liquid-lp liquid-blog-item d-flex flex-wrap align-items-center">

                                    <a href="https://majoo.id/perangkat">
                                        <img src="https://majoo.id/assets/uploads/home/perangkat/epson.png" alt="Lates Post">

                                        <div class="name">
                                            <span>Ethernet Printer</span>
                                            <span>Mulai Rp. 1.325.000</span>
                                        </div>
                                    </a>

                                </article>

                            </div>
                            
                        </div>
                </div>
                
                <div class="lqd-column col-md-12">
                    <div class="col-md-12 text-center">
                        <a href="https://majoo.id/Perangkat" class="btn btn-naked text-link">
                            <span>
                                <span class="btn-txt">Lihat semua perangkat</span>
                                <span class="btn-icon"><i class="mj-arrow-blue"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </section>						 -->
<!-- </div> -->
@include('menu.footer')
<!-- <div class="control_footer"></<div>  -->

@endsection