@extends('layouts.app')

@section('content')
			
			<!-- ============================ Page Title Start================================== -->
			<div class="page-title inner-page">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Contact Us</h2>
							<span class="ipn-subtitle" style="color: white">Drop a message for us today!</span>
							
						</div>
					</div>
				</div>
				<div class="ht-80"></div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Main Section Start ================================== -->
			<section class="pt-0">
				<div class="container overlio-top">
					<div class="row">
						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="contact_side overlio-top">
								
								<div class="ct_cmp_social">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								
								<div class="ct_cmp_caption">
									<h4 class="mb-0">Get in Touch.</h4>
									<p>Get in touch via mail, call and direct address.</p>
								</div>
								
								<div class="ct_cmp_address">
									<div class="ct_cmp_single">
										<div class="ct_cmp_single_icon"><i class="ti-location-pin"></i></div>
										<div class="ct_cmp_brief">
											<h5>Reach Us:</h5>
											<span>14 Samuel Awoniyi Street, Opebi<br>Ikeja, Lagos</span>
										</div>
									</div>
									<div class="ct_cmp_single">
										<div class="ct_cmp_single_icon"><i class="fa fa-envelope"></i></div>
										<div class="ct_cmp_brief">
											<h5>Drop a mail:</h5>
											<span>info@getverifiedpro.com</span>
											
										</div>
									</div>
									{{-- <div class="ct_cmp_single">
										<div class="ct_cmp_single_icon"><i class="fa fa-phone"></i></div>
										<div class="ct_cmp_brief">
											<h5>Call Us:</h5>
											<span>+91 256 258 4759</span>
										</div>
									</div> --}}
								</div>
								
							</div>
						</div>
						
						<!-- Item Wrap Start -->
						<div class="col-lg-8 col-md-8 col-sm-12">
							<form class="contact_row">
								
								<div class="form_row_box">
									<div class="form_row_header">
										<div class="form_row_header_flex"><img src="assets/img/email.svg" class="img-fluid" width="52" alt="" /></div>
										<div class="form_row_header_right">
											<p>Write as a few words about your query and we'll prepare your query for you within <strong>24</strong> hours and inform you shortly.</p>
										</div>
									</div>
									<div class="form_row_box_body">
										<div class="form-row">
										
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label>First name</label>
													<input type="text" class="form-control with-light" placeholder="Your Name" />
												</div>
											</div>

											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label>Last name</label>
													<input type="text" class="form-control with-light" placeholder="Your Name" />
												</div>
											</div>
											
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label>Your e-Mail</label>
													<input type="email" class="form-control with-light" placeholder="updicl@gmail.com" />
												</div>		
											</div>
											
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label>Subject</label>
													<input type="text" class="form-control with-light" placeholder="ThemezHub Ltd." />
												</div>			
											</div>
											
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label>Phone No.</label>
													<input type="text" class="form-control with-light" placeholder="+91 256 584 7863" />
												</div>			
											</div>
											
											<div class="col-lg-12 col-md-12">
												<div class="form-group">
													<label>Message </label>
													<textarea class="form-control with-light">About Your Query</textarea>
												</div>		
											</div>
											
											<div class="col-lg-12 col-md-12">
												<div class="form-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="upfile">
														<label class="custom-file-label" for="upfile">Upload file</label>
													</div>
												</div>
											</div>
											
											<div class="col-lg-12 col-md-12">
												<div class="form-group">
													<button type="button" class="btn dark-3">Submit Query</button>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							
							</form>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Main Section End ================================== -->
			
			@include("includes.subscribe")
			
			@endsection
			