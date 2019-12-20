@extends('layout.main')

@section('title', 'Global Multicash')

@section('container')

	<div class="container-fluid">
		
		<section class="home-slider home ftco-degree-bg">
	      <div class="slider-item">
	        <div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-5 fiProb">
                <input type="hidden" id="hidTranslate">
                <h1 class="mb-4" id="sTitle">Solusi Masalah Keuangan anda</h1>
                <p id="psTitle">Kami dapat membantu masalah keuangan anda dengan memberikan penawaran pinjaman cepat dengan bunga rendah. Kami menawarkan pinjaman mulai dari Rp. 500.000 - Rp. 60.000.000. </p>               
              </div>

              <div class="col-md-7 imgCover">
                  <!-- <img class="img-fluid" src="{{asset('assets/img/res_happyman.png')}}" alt="Res_Global multicash" > -->
                  <img src="{{asset('assets/img/Res_Global multicash2_opacity.png')}}" alt="Res_Global multicash" width="500px" height="500px">
              </div>
	            
	          </div>
	        </div>
	      </div>
	  </section>

  	<section class="ftco-section ourservices ftco-degree-bg" id="ourservices">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate ">
              <span class="subheading" id="sHOS">Layanan Kami</span>
              <h2 id="pOSH2">Kami memberi anda kemudahan akses pinjaman dengan bunga yang rendah !</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate ">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-security"></span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading" id="sHSecure">Keamanan Tingkat Tinggi</h3>
                  <p id="pHSecure">Dengan menggunakan teknologi Enkripsi tingkat tinggi kami akan melidungi data pribadi anda dan tidak akan menyebarkannya kepada siapapun.</p>
                </div>
              </div>      
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-clock-o"></span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading" id="sH24CS">Layanan Informasi 24 Jam</h3>
                  <p id="pH24CS">Kami menyediakan layanan informasi yang handal selama 24 jam. Jika ada keluhan atau ada ingin ditanyakan jangan ragu untuk hubungi kami.</p>
                </div>
              </div>      
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-plane"></span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading" id="sHFE">Cepat dan Mudah</h3>
                  <p id="pHFE">Layanan yang cepat dan Proses Approve yang cepat. Anda bisa dapatkan total uang sebesar Rp. 60.000.000 dalam 1 jam.</p>
                </div>
              </div>    
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-credit-card-alt"></span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading" id="sHLowIn">Tingkat Bunga Rendah</h3>
                  <p id="pHLowIn">Kami menawarkan anda pinjaman dengan bunga rendah mulai dari 0.05%. Jangka waktu peminjaman bervariasi mulai dari 3-5 Tahun dan pengembalian pinjaman bisa dicicil per Minggu, per dua minggu, atau per bulan</p>
                </div>
              </div>      
            </div>
          </div>
        </div>
    </section>

    <section class="ftco-section-parallax apply ftco-degree-bg" id="apply">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-center heading-section heading-section-white ftco-animate mt-5 ">
              <span class="subheading" id="sHHapp">Bagaimana cara pendaftarannya</span>
              <h2 id="pSHapp"> Langkah sederhana untuk mendaftar</h2>
              
         			 <div class="row rowapply" id="rmargin">
                <div class="col-md-offset-1"></div>
      	          <div class="col-md-2 d-flex align-self-stretch ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-vcard"></span></div></div>
      	              <div class="media-body p-2">
      	                <h3 class="heading text-white" id="pHFReg">Isi form</h3>
      	              </div>
      	            </div>      
      	          </div>

      	          <div class="col-md-2 d-flex align-self-stretch ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-long-arrow-right"></span></div></div>	              
      	            </div>      
      	          </div>
                  <!-- <div class="col-md-offset-1"></div> -->

      	          <div class="col-md-2 d-flex align-self-stretch  ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3 "><span class="align-self-center icon-check"></span></div></div>
      	              <div class="media-body p-2">
      	                <h3 class="heading text-white" id="pHWav">Tunggu konfirmasi</h3>
      	              </div>
      	            </div>      
      	          </div>

      	          <div class="col-md-2 d-flex align-self-stretch ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="justify-content-center">
                        <div class="icon color-2 d-flex justify-content-center mb-3">
                          <span class="align-self-center icon-long-arrow-right"></span>
                        </div></div>
      	            </div>      
      	          </div>
                  
      	          <div class="col-md-2 d-flex align-self-stretch ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="d-flex justify-content-center">
      	              	<div class="icon color-2 d-flex justify-content-center mb-3">
      	              		<!-- <span class="align-self-center icon-dollar"></span> -->
                          <span><img class="img-fluid" src="{{asset('assets/img/moneyRp.png')}}" alt=""></span>
      	              	</div>
      	              </div>
      	              <div class="media-body p-2">
      	                <h3 class="heading text-white" id="pHGL">Pinjaman cair</h3>
      	              </div>                        
      	            </div>    
      	          </div> 
                  <div class="col-md-offset-1"></div>
                    
               </div>               

            <!--   <p class="ftco-animate mt-3"><a href="#" class="btn btn-primary btn-outline-white py-3 px-4 btnApply" id="pBtnApply">Apply Now</a></p> -->
            </div>
          </div>	      
	     <div class="parallax-img d-flex align-items-center">
	     </div>
        </div>
      </div>
    </section>
	
  	<section class="isiContactUS" id="isiContactUS">		
  		<div class="container">
    		<div class="d-flex justify-content-center"></div>				
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card shadow p-1 mb-3 bg-white rounded">
            	<div class="col-md-12 text-center heading-section mt-3 ftco-animate">
                <div class="card-header headContact">
      					   <h1 class="scontact" id="HConUS">Hubungi Kami</h1>  				
                </div>
                <div class="card-body">
                  <form method="POST" action="/pay_verify" name="post_Verify" enctype="multipart/form-data">
                  @csrf                               
                    <div class="form-group row ftco-animate">
                      <label for="txtUsrName" class="col-sm-2 ml-4 col-form-label" id="lblUsrNm" >Nama Pengguna
                        <span class="errRequired">*</span>
                      </label> 
                       <div class="col-sm-8"> 
                          <input type="text" name="txtUsrName" id="txtUsrName" class="form-control @error('txtUsrName') is-invalid @enderror" placeholder = "Masukan Nama Anda..." >
                          @error('txtUsrName')<div class="invalid-feedback">{{ 'Tolong Masukan Nama Anda.....!'}}</div>@enderror
                      </div>                     
                    </div>            

                    <div class="form-group row ftco-animate">
                      <label for="txtsEmail" class="col-sm-2 ml-4 col-form-label" id="lblEmail" >Email
                        <span class="errRequired">*</span>
                      </label> 
                      <div class="col-sm-8">
                          <input type="text" name="txtsEmail" id="txtsEmail" class="form-control @error('txtsEmail') is-invalid @enderror" placeholder="Masukan alamat Email Anda... " style="background-color: #e8f0fd" value="{{old('txtsEmail')}}">
                           @error('sEmail')<div class="invalid-feedback">{{ 'Tolong Masukan alamat Email Anda...!'}}</div>@enderror
                      </div>                     
                    </div>

                    <div class="form-group row ftco-animate">
                      <label for="txtsTelp" class="col-sm-2 ml-4 col-form-label" id="lblPhone" >Nomor Telpon
                            <span class="errRequired">*</span> 
                      </label> 
                      <div class="col-sm-8">
                          <input type="text" name="txtsTelp" id="txtsTelp" class="form-control @error('txtsTelp') is-invalid @enderror" placeholder="Masukan nomor Telpon Anda..." style="background-color: #e8f0fd" value="{{old('txtsTelp')}}">
                          @error('txtsTelp')<div class="invalid-feedback">{{ 'Tolong Masukan nomor Telpon Anda...!'}}</div>@enderror 
                      </div>                     
                    </div>         

                    <div class="form-group row ftco-animate">
                      <label for="txtsmsg" class="col-sm-2 ml-4 col-form-label" id="lblMessage" >Tulis Pesan
                            <span class="errRequired">*</span> 
                      </label> 
                      <div class="col-sm-8">
                          <textarea name="txtsmsg" id="txtsmsg" class="form-control @error('txtsmsg') is-invalid @enderror" placeholder="Tulis pesan yang akan anda sampaikan..." style="background-color: #e8f0fd" value="{{old('txtsmsg')}}"></textarea>
                          @error('txtsmsg')<div class="invalid-feedback">{{ 'Tolong Tulis pesan yang akan anda sampaikan...!'}}</div>@enderror 
                      </div>                     
                    </div>  

                    <div class="btnCfm ftco-animate">
                      <button type="submit" class="btn btn-primary btn-group btn-lg d-inline " name="btn_post_Verify" id="btn_post_Verify">Kirim
                      </button>              
                      <button type="reset" class="btn btn-danger btn-group btn-lg d-inline " name="btnReset" id="btnReset">Batalkan</button>
                    </div>  

                  </form>                
                </div>
              </div>
            </div>                                              
          </div>      
        </div>
  		</div>
  	</section>
			   
    <section class="ftco-section-parallax about ftco-degree-bg" id="about">
      <div class="parallax-img d-flex align-items-center">
          <div class="container">
              <div class="row d-flex justify-content-center rabout ftco-animate">
                <h1 class="sabout" id="HAbout">
                  Tentang Kami
                </h1>
              </div>
            <div class="row sjdl ftco-animate">
              <p class="heading" id="pHAbout">
              Global Multicash adalah platform berbasis technology informasi yang dijalankan oleh Sembilan Bola Dunia yang mengedepankan perlindungan konsumen dan memiliki risiko yang terkelola dengan baik.
              </p>
            </div>
          </div>
      </div>
      <div class="parallax-img d-flex align-items-center"></div>
      <div class="parallax-img d-flex align-items-center"></div>     
    </section>   
  </div>  

@endsection