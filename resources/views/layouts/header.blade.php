<headers id="header" class="header-pages wow slideInDown" data-wow-delay="0.5s"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="container-fluid d-flex" >
	<div class="logo flex-fill">
	  <a class="navbar-brand align-center" href="/">
		<img src="{{asset('assets/image/logo.svg')}}" class="d-inline-block align-center" alt="">
		Kuitansiku
	  </a>
	</div>

	<nav class="coba nav-main d-none d-lg-block justify-content-end">
	  <ul class="p-0">
		<li class="nav-item"><a id="hme" class="nav-link hme" href="/#intro">Home</a></li>
		<li class="nav-item"><a id="ftr" class="nav-link ftr" href="/#features">Feature</a></li>
		<li class="nav-item"><a id="test" class="nav-link test" href="/#testimoni">Testimoni</a></li>
		<li class="nav-item"><a id="cnt" class="nav-link cnt" href="/#contact">Contact</a></li>
		<li class="nav-item dropdown">
			<a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" id="">
			Services
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a id="serv" class="dropdown-item serv" href="/#our_service">our service</a>
			<a class="dropdown-item" href="#">POS - sistem kasir</a>
			<a class="dropdown-item" href="#">Kuitansi Online</a>
			<a class="dropdown-item" href="#">Rapot Online</a>
			<a class="dropdown-item" href="#">Laporan Online</a>
			<a class="dropdown-item" href="#">Property</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="/#hardware">hardware</a>
			</div></li>
		<li class="nav-item"><a id="log_in" class="nav-link" href="#" data-toggle="modal" data-target="#Login">Login <i class="fa fa-lock"></i></a></li>
		
		<li class="nav-item"><a id="dload" href="#download dload" class="btn-download">Download</a></li>
	  </ul>
	</nav>
</div>
</headers>
<!-- LOGIN FORM -->
@include('ServiceLogin.loginHome')