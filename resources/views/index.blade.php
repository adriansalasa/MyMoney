@extends('layout.main')

@section('title', 'Eazy Money')

@section('container')

	<div class="container-fluid">
		
		<section class="home-slider home ftco-degree-bg">
	      <div class="slider-item">
	        <div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-7 imgCover">
                  <img class="img-fluid" src="{{asset('assets/img/res_happyman.png')}}" alt="Happy man" >
              </div>
	            <div class="col-md-5">
	              <h1 class="mb-4">Your Financial Problem Solution</h1>
	              <p>We can help your financial problem by offering the Quick Loans 
                with low interest. We offer loans from Rp. 500.000 - Rp. 50.000.000. 
                Once it Approved your loan send to your Bank Account directly. </p>	              
	            </div>
	          </div>
	        </div>
	      </div>
	  </section>

  	<section class="ftco-section ourservices ftco-degree-bg" id="ourservices">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate ">
              <span class="subheading">Our Services</span>
              <h2>We give you easy access to Loan with low interest !</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate ">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-security"></span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading">High Security</h3>
                  <p>With High Security Technology Encryption. We will surely to protect your privacy and would never disclose any personal information to anyone.</p>
                </div>
              </div>      
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-clock-o"></span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading">24 Hour Customer Service</h3>
                  <p>We are here to provide 7*24 hour high-quality customer service. If you had any questions or obstacles, do not hesitate to contact us.</p>
                </div>
              </div>      
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-plane"></span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading">Fast & Easy</h3>
                  <p>Fast & easy to Approve. You can get up to 6,000,000 Rp in hour.</p>
                </div>
              </div>    
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-credit-card-alt"></span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading">Low Interest</h3>
                  <p>We offer a low interest personal loan starting 8.50% p.a. The loan term varies from 3-5 years and the repayments can be made weekly, fortnightly or monthly</p>
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
              <span class="subheading">How to Apply</span>
              <h2> Simple Step to Apply</h2>
              
         			 <div class="row rowapply" id="rmargin">
                <div class="col-md-offset-1"></div>
      	          <div class="col-md-2 d-flex align-self-stretch ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-vcard"></span></div></div>
      	              <div class="media-body p-2">
      	                <h3 class="heading text-white">Fill registration</h3>
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
      	                <h3 class="heading text-white">Wait for Verification</h3>
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
      	                <h3 class="heading text-white">Get the Loan</h3>
      	              </div>                        
      	            </div>    
      	          </div> 
                  <div class="col-md-offset-1"></div>
                    
               </div>               

              <p class="ftco-animate mt-3"><a href="#" class="btn btn-primary btn-outline-white py-3 px-4 btnApply">Apply Now</a></p>
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
      					   <h1 class="scontact">contact us</h1>  				
                </div>
                <div class="card-body">
                  <form method="POST" action="/pay_verify" name="post_Verify" enctype="multipart/form-data">
                  @csrf                               
                    <div class="form-group row ftco-animate">
                      <label for="txtUsrName" class="col-sm-2 ml-4 col-form-label" >Username
                        <span class="errRequired">*</span>
                      </label> 
                       <div class="col-sm-8"> 
                          <input type="text" name="txtUsrName" id="txtUsrName" class="form-control @error('txtUsrName') is-invalid @enderror" placeholder = "masukan username anda..." >
                          @error('txtUsrName')<div class="invalid-feedback">{{ 'Tolong isi Email anda..!'}}</div>@enderror
                      </div>                     
                    </div>            

                    <div class="form-group row ftco-animate">
                      <label for="txtsEmail" class="col-sm-2 ml-4 col-form-label" >Email
                        <span class="errRequired">*</span>
                      </label> 
                      <div class="col-sm-8">
                          <input type="text" name="txtsEmail" id="txtsEmail" class="form-control @error('txtsEmail') is-invalid @enderror" placeholder="masukan alamat email anda... " style="background-color: #e8f0fd" value="{{old('txtsEmail')}}">
                           @error('sEmail')<div class="invalid-feedback">{{ 'Tolong isi Email anda..!'}}</div>@enderror
                      </div>                     
                    </div>

                    <div class="form-group row ftco-animate">
                      <label for="txtsTelp" class="col-sm-2 ml-4 col-form-label" >No. Telp
                            <span class="errRequired">*</span> 
                      </label> 
                      <div class="col-sm-8">
                          <input type="text" name="txtsTelp" id="txtsTelp" class="form-control @error('txtsTelp') is-invalid @enderror" placeholder="masukan nomer telpon anda..." style="background-color: #e8f0fd" value="{{old('txtsTelp')}}">
                          @error('txtsTelp')<div class="invalid-feedback">{{ 'Tolong nomor telpon anda..!'}}</div>@enderror 
                      </div>                     
                    </div>         

                    <div class="form-group row ftco-animate">
                      <label for="txtsmsg" class="col-sm-2 ml-4 col-form-label" >Pesan
                            <span class="errRequired">*</span> 
                      </label> 
                      <div class="col-sm-8">
                          <textarea name="txtsmsg" id="txtsmsg" class="form-control @error('txtsmsg') is-invalid @enderror" placeholder="masukan pesan yang akan disampaikan..." style="background-color: #e8f0fd" value="{{old('txtsmsg')}}"></textarea>
                          @error('txtsmsg')<div class="invalid-feedback">{{ 'Harap isi pesan yang akan disampaikan..!'}}</div>@enderror 
                      </div>                     
                    </div>  

                    <div class="btnCfm ftco-animate">
                      <button type="submit" class="btn btn-primary btn-group btn-lg d-inline " name="btn_post_Verify" id="btn_post_Verify">Submit
                      </button>              
                      <button type="reset" class="btn btn-danger btn-group btn-lg d-inline " name="btnReset" id="btnReset">Reset</button>
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
                <h1 class="sabout">
                  About Us
                </h1>
              </div>
            <div class="row sjdl ftco-animate">
              <p class="heading">Eazy money is money loan application that developed by PT. Graha Mitra Teguh for help people that urgently need money. Eazy money offer loans from Rp. 500.000 - Rp. 50.000.000 and It has variety installment from Weekly, Monthly and Weekly </p>
            </div>
          </div>
      </div>
      <div class="parallax-img d-flex align-items-center"></div>
      <div class="parallax-img d-flex align-items-center"></div>
    </section>

  </div>  

@endsection