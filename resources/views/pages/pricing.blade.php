@extends('layouts.app')

@section('content')

			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="hero-banner full bg-cover center" style="background:#223c1d url(assets/img/landing-bg.png) no-repeat;" data-overlay="0">
				<div class="container">
					<div class="mt-5">
						<div class="row m-0 justify-content-center">
							<div class="col-lg-112 col-md-11">
								<h2>Get Best Picing offer for your business</h2>
								<p class="lead">All plan are include in 30 days trial.</p>	
								<div class="linkeo_link">
									<a href="#" class="btn _hire_freelancers">Start Free Trial</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->

			<!-- ============================ Featured Designs Start ==================================== -->
			<section class="pt-0">
				<div class="container overlio-top">
					<div class="row justify-content-center">
						<!-- Single Pricing Box -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="pricing_boxes">
								<div class="pricing_boxes_header">
									<div class="pricing_thumb_title">
										<h4>Basic</h4>
										<p>For organising every corner of your life</p>
									</div>
								</div>
								<div class="pricing_boxes_middle">
									<h2 class="pricing_rate">$29</h2>
									<span class="time_esti">per month</span>
									<a href="#" class="btn pricing_btn">Get Started</a>
								</div>
								<div class="pricing_boxes_detail">
									<ul class="pricing_lists">
										<li>Access Whole Items</li>
										<li>Sync across device</li>
										<li>Share with 5 guests</li>
										<li>24x7 Email Support</li>
									</ul>
								</div>
							</div>
						</div>
						
						<!-- Single Pricing Box -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="pricing_boxes featured">
								<div class="pricing_boxes_header">
									<div class="pricing_thumb_title">
										<h4>Professional</h4>
										<p>For organising every corner of your life</p>
									</div>
								</div>
								<div class="pricing_boxes_middle">
									<h2 class="pricing_rate">$99</h2>
									<span class="time_esti">Per 1 Year</span>
									<a href="#" class="btn pricing_btn">Get Started</a>
								</div>
								<div class="pricing_boxes_detail">
									<ul class="pricing_lists">
										<li>Access Whole Items</li>
										<li>Sync across device</li>
										<li>Share with 10 guests</li>
										<li>24x7 Email Support</li>
									</ul>
								</div>
							</div>
						</div>
						
						<!-- Single Pricing Box -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="pricing_boxes">
								<div class="pricing_boxes_header">
									<div class="pricing_thumb_title">
										<h4>Organisation</h4>
										<p>For organising every corner of your life</p>
									</div>
								</div>
								<div class="pricing_boxes_middle">
									<h2 class="pricing_rate">$199</h2>
									<span class="time_esti">Lifetime</span>
									<a href="#" class="btn pricing_btn">Get Started</a>
								</div>
								<div class="pricing_boxes_detail">
									<ul class="pricing_lists">
										<li>Access Whole Items</li>
										<li>Sync across device</li>
										<li>Share with 5 guests</li>
										<li>24x7 Email Support</li>
									</ul>
								</div>
							</div>
						</div>				
					</div>
				</div>
			</section>
			<!-- ============================ Featured Jobs End ==================================== -->

			@include("includes.subscribe")
			
			@endsection