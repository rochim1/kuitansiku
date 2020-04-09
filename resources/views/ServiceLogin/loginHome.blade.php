<div id="Login" class="modal fade mt-5">
			<div class="modal-dialog">
				<div class="modal-content rounded_modal">
					<!-- Modal Header -->
					<div class="modal-header bg-linear-yellowsoft text-center">
						<h4 class="modal-title font-weight-bold text-white">Login</h4>
						<button type="button" class="close" data-dismiss="modal">×</button>
					</div>
					<div class="modal-body">
					
							<form id="formlogin" class="form-horizontal p-3" method="POST" action="/login">
							@csrf
								<div class="form-group row">
									<label class="col-sm-2 col-form-label" for="email">Email:</label>
									<div class="col-sm-10">
											<input required id="email" class="input form-control" type="email" name="email" placeholder="masukkan email">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label" for="pwd">Password:</label>
									<div class="col-sm-10 ">
											<input required class="input form-control" id="password" type="password" name="password" placeholder="masukkan password">
											<div class="mata"></div>
									</div>
								</div>
								<script>
									$(".mata").hover(function(){
										var x = $("#pwd");
										if (x.attr("type") == "password") {
											x.attr("type", "text");
										} else {
											x.attr("type", "password");
										}
									})
								</script>
								<div class="form-group row">
									<div class="col-sm-12">
										<div class="w-100 d-flex text-small-13">
											<label class="flex-fill"><input type="checkbox" class=" text-left"> Remember me</label>  <a href="#" class="flex-fill text-right">Lupa Password ?</a>
										</label> 
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12 d-flex justify-content-center">
										<div>
										@foreach($errors->all() as $error)
										{{$error}}
										@endforeach
										</div>
										<button type="submit" id="btn-login" name="btn_login" class="btn btn-md btn-primary w-50"><span class="glyphicon glyphicon-log-in"></span>    Sign In</button>
									</div>
									<div class="col-sm-12 text-center">
										<small>
											<a id="daftar_btn" href="/ServiceLogin">Belum Punya Akun ?</a>
										</small>
									</div>
								</div>
							</form>
							<div class="card-footer bg-white text-center text-secondary font-weight-light login_header">atau login dengan
								<div class="container pt-2 d-flex justify-content-center">
									<ul class="social">
										<li class="facebook"><a href="/"><i class="fa fa-facebook-f"></i></a></li>
										<li class="twitter"><a href="/"><i class="fa fa-twitter"></i></a></li>
										<li class="google-plus"><a href="/"><i class="fa fa-google"></i></a></li>
									</ul>
								</div>
							</div>
						
					</div>		
					<!-- <div class="card-footer text-muted bg-linear-yellowsoft text-center"></div>			 -->
				</div>
			</div>
</div>

