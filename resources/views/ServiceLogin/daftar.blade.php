
			<div class="daftar">
				<div class="modal-content rounded_modal">
					<!-- Modal Header -->
					<div class="modal-header bg-linear-yellowsoft">
						<h4 class="modal-title font-weight-bold text-white">Daftar</h4>
					</div>
					<div class="modal-body">
						<div>
							
							<form action="/register" id="regForm" enctype="multipart/form-data" class="form-horizontal container" method="POST">
                    @csrf
                    <div class="tab">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama :</label>
                        <div class="col-sm-4">
                          <div class="nama">
                            <input  type="text" style="margin-bottom: 10px;" placeholder="nama depan, cth : Joko" class="input must" name="nama_dp">
                          </div>
                        </div>
                        <div class="col-sm-6"> 
                          <input  style="padding-left: 10px" type="text" placeholder="nama belakang, cth : Susilo" class="input must" name="nama_blk">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal lahir:</label>
                        <div class="col-sm-10 ">
                          <div class="ttl">
                            <input  class="input must" type="date" name="tgl">
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="email">Email:</label>
                        <div class="col-sm-10">
                          <div class="amplop">
                            <input id="email-input" class="input must" type="email" name="email" id="email" placeholder="masukkan email">
                          </div>
                          <small class="mail-warn"></small>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Telp:</label>
                        <div class="col-sm-10 ">
                          <div class="phone">
                            <input class="phone input must" type="text" name="telp">
                          </div>
                          <small class="phone-warn">*masukan nomor telpon yang valid</small>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-10 ">
                        <div class="address">
                          <textarea  name="alamat" class="input must" placeholder="masukkan alamat lengkap anda"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label" for="pwd1">Password:</label>
                      <div class="col-sm-10 " style="height: 70px">
                      <div class="pasw">
                        <input  class="input must" type="password" id="pwd1" placeholder="masukkan password">
                        <small class="tip">minimal 8 karakter</small>
                        <div class="progress">
                        <div class="progress-bar"></div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="re-pwd"1>Re-type Password:</label>
                  <div class="col-sm-10 ">
                  <div class="pasw">
                    <input  class="input must " type="password" name="password" id="re-pwd1" placeholder="Ulangi password">
                    <small class="tip">ulangi pasword</small>
                  </div>
                </div>
                </div>
                </div>
                <script src="{{asset('js/js/password.js')}}"></script>
                <script src="{{url('js/js/passwordmeter.js')}}"></script>
                <script src="{{asset('js/js/jquery.maskinput.js')}}"></script>
                <!-- ==================================================================tab========================== -->

                <div class="tab">

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jenis Usaha:</label>
                  <div class="col-sm-10 ">
                  <select  name="jenis_ush" class="input must">
                    <option></option>
                    <option>barber shop</option>
                    <option>restaurant</option>
                    <option>Hotel / penginapan</option>
                    <option>toko retail</option>
                    <option>Lain-lain</option>
                  </select>
                </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Usaha:</label>
                  <div class="col-sm-10 ">
                  <div class="comp">
                    <input  name="nama_ush" class="input must" type="text" maxlength="210" placeholder="Nama Usaha">
                  </div>
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No Telp Perusahaan:</label>
                  <div class="col-sm-10 ">
                  <div class="phone">
                    <input  name="telp_ush" class="input phone must" placeholder="No Telpon">
                    <small class="phone-warn">*masukan nomor telpon yang valid</small>
                  </div>
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat Usaha:</label>
                  <div class="col-sm-10 ">
                  <div class="address">
                    <input  name="alamat_ush" class="input must" placeholder="Masukkan Alamat Perusahaan">
                  </div>
                </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-5 ">
                  <div class="data-wilayah">
                    <select  name="prov" id="propinsi" class="input">
                    <option value=""></option>
                  </select>
                </div>
                </div>
                <div class="col-sm-5 ">
                <div class="data-wilayah">
                  <select  name="kota" id="kota" class="input">
                  <option value=""></option>
                </select>
                </div>
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="data-wilayah">
                  <div class="col-sm-5 ">
                    <select  name="kecamatan" id="kecamatan" class="input">
                    <option value=""></option>
                  </select>
                </div>
                </div>
                <div class="col-sm-5 ">
                <div class="data-wilayah">
                  <select  name="kelurahan" id="kelurahan" class="input">
                  <option value=""></option>
                </select>
                </div>
                </div>
                </div>


                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">E-mail perusahaan:</label>
                  <div class="col-sm-10 ">

                  <div class="amplop">
                    <input  name="email_ush" class="input" type="email" placeholder="Masukkan Email Perusahaan">
                    <span><em style="color: red">*</em>Optional, boleh diisi nanti</span>
                  </div>
                </div>
                </div>
                </div>

                <div style="text-align:center;margin-top:10px;">
                <span class="step"></span>
                <span class="step"></span>
                </div>
                <div class="form-group row">
                <div class="col-sm-8">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-warning">Previous</button>
                </div>
                  <div class="col-sm-4 d-flex justify-content-end">
                    <button type="button" id="skipp" class="btn btn-danger mr-2">Skip</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-primary" style="float: right;">Next</button>
                  </div>
                </div>
                <div class="text-center">
                  <small>
                  <a href="#login" id="login_btn">Sudah Punya Akun ?, Login sekarang</a>
                  </small>
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
					</div>		
					<!-- <div class="card-footer text-muted bg-linear-yellowsoft text-center"></div>			 -->
				</div>
			</div>