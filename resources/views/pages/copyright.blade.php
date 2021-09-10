@extends('layouts.app')

@section('content')
			
			<!-- ============================ Page Title Start================================== -->
			<div class="page-title search-form dark">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="_jb_details01">
								
								<div class="_jb_details01_flex">
									<div class="_jb_details01_authors">
										<img src="https://res.cloudinary.com/pilstech/image/upload/v1630685713/proslogo_li2ixf.png" class="img-fluid" alt="" />
									</div>
									<div class="_jb_details01_authors_caption">
										<h4 class="jbs_title">Pro-filr<img src="assets/img/verify.svg" class="ml-1" width="12" alt=""></h4>
										<ul class="jbx_info_list">
											{{-- <li><span><i class="ti-briefcase"></i>InVision</span></li> --}}
											{{-- <li><span><i class="ti-credit-card"></i>$35k-50k PA</span></li> --}}
											{{-- <li><span><i class="ti-location-pin"></i>Lagos, Nigeria</span></li> --}}
											{{-- <li><span><i class="ti-timer"></i>10 min ago</span></li> --}}
										</ul>
										{{-- <ul class="jbx_info_list">
											<li><div class="jb_types fulltime">Full Time</div></li>
											<li><div class="jb_types urgent">Urgent</div></li>
											<li><div class="jb_types remote">Remote</div></li>
										</ul> --}}
									</div>
								</div>
								
								<div class="_jb_details01_last">
									<ul class="_flex_btn">
										{{-- <li><a href="#" class="_saveed_jb"><i class="fa fa-heart"></i></a></li> --}}
										<li><a href="{{route('pricing')}}" class="_applied_jb">Subscription Plan</a></li>
									</ul>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Main Section Start ================================== -->
			<section>
				<div class="container">
					<div class="row">
					
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="_job_detail_box">
								
								<div class="_job_detail_single">
									<h4>Copyright Policy</h4>
									
								</div>
								
								<div class="_job_detail_single">
									<dl>
										<dt>Complaints regarding content posted on the Pro-Filr Inc. website</dt>
										<dd>Pro-Filr Inc. respects the intellectual property rights of others and desires to offer a platform which contains no content that violates those rights. Our User Agreement requires that information posted by Members be accurate, lawful and not in violation of the rights of third parties. To promote these objectives, Pro-Filr Inc. provides a process for submission of complaints concerning content posted by our Members. Our policy and procedures are described and/or referenced in the sections that follow.

											<p>Please note that whether or not we disable access to or remove content, Pro-Filr Inc. may make a good faith attempt to forward the written notification, including the complainant’s contact information, to the Member who posted the content and/or take other reasonable steps to notify the Member that Pro-Filr Inc. has received notice of an alleged violation of intellectual property rights or other content violation. It is also our policy, in appropriate circumstances and in our discretion, to disable and/or terminate the accounts of Members, or groups as the case may be, who infringe or repeatedly infringe the rights of others or otherwise post unlawful content.</p>
											
											<p>Please note that any notice or counter-notice you submit must be truthful and must be submitted under penalty of perjury. A false notice or counter-notice may give rise to personal liability. You may therefore want to seek the advice of legal counsel before submitting a notice or a counter-notice.</p></dd>
									</dl>
									
									
								</div>
								
								<div class="_job_detail_single">
									<h4>Claims regarding copyright infringement</h4>
									<p>Notice of Copyright Infringement: Pro-Filr Inc. has implemented procedures for receiving written notification of claimed infringements. Pro-Filr Inc. has also designated an agent to receive notices of claimed copyright infringement. If you believe in good faith that your copyright has been infringed, you may complete and submit a Notice of Copyright Infringement form, or otherwise provide a written communication which contains:</p>
									<p> 1. An electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest;</p>
									<p>	2. A description of the copyrighted work that you claim has been infringed;</p>
									<p>	3. A description specifying the location on our website of the material that you claim is infringing;</p>
									<p>	4. Your email address and your mailing address and/or telephone number;</p>
									<p>	5. A statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; and</p>
									<p>	6.A statement by you, made under penalty of perjury, that the information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner’s behalf.</p>
									<p>Please submit your notice to Pro-Filr Inc.’s Copyright Agent as follows: Fill out our online submission form to contact the Pro-Filr Inc. Copyright Agent Or contact us by mail at:</p>
									<p>Pro-Filr Inc. Corporation
										ATTN: Copyright Agent
										Legal Department
										10 George St. North, Brampton,
										ON. L6X 1R2, Canada</p>
									<p>Counter-Notice:</p>
									<p>If you believe that a notice of copyright infringement has been improperly submitted against you, you may submit a Counter-Notice, You may complete the Counter-Notice Regarding Claim of Copyright Infringement form, or otherwise provide a written communication which contains:</p>
									<p>1. Your physical or electronic signature;</p>
									<p>2. Identification of the material removed or to which access has been disabled;</p>
									<p>3. A statement under penalty of perjury that you have a good faith belief that removal or disablement of the material was a mistake or that the material was misidentified;</p>
									<p>4. Your full name, your email address, your mailing address, and a statement that you consent to the jurisdiction of the Ontario Court of competent jurisdiction and that you will accept service of process from the Complainant submitting the notice or his/her authorized agent.</p>
									<p>Please submit your Counter-Notice to Pro-Filr Inc.’s Copyright Agent via our online submission form or mail to the address specified above</p>
									<p>Claims regarding content other than copyright infringement</p>
									<p>For issues other than copyright infringement, (e.g Trademark, False profile etc) please visit our Help Center where you’ll complete an a contact form and one of our support services shall contact you.</p>
								</div>
								
								{{-- <div class="_job_detail_single flexeo">
									<div class="_job_detail_single_flex">
										<ul class="shares_jobs">
											<li>Share The Job</li>
											<li><a href="#" class="share fb"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="share tw"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="share gp"><i class="fa fa-google"></i></a></li>
											<li><a href="#" class="share ln"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
									
									<div class="_exlio_buttons">
										<ul class="bottoms_applies">
											<li><a href="#" class="_saveed_jb">Save Job</a></li>
											<li><a href="#" class="_applied_jb">Apply Job</a></li>
										</ul>
									</div>
								</div> --}}
								
								{{-- <div class="_job_detail_single">
									<h4>Maching Jobs</h4>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											
											<!-- Single Item -->
											<div class="_list_jobs_wraps shadow_0 border">
												<div class="_list_jobs_f1ex first">
													<div class="_list_110">
														<div class="_list_110_thumb">
															<a href="employer-detail.html"><img src="assets/img/c-1.png" class="img-fluid" alt=""></a>
														</div>
														<div class="_list_110_caption">
															<h4 class="_jb_title"><a href="job-detail.html">Application Developer</a></h4>
															<div class="_emp_jb">Drive Due</div>
														</div>
													</div>
												</div>
												<div class="_list_jobs_f1ex">
													<div class="_list_110_caption">
														<h4 class="_jb_title">Liverpool, UK</h4>
														<div class="_emp_jb">Location</div>
													</div>	
												</div>
												<div class="_list_jobs_f1ex">
													<div class="_list_110_caption">
														<h4 class="_jb_title">$120k - $155k</h4>
														<div class="_emp_jb">Yearly</div>
													</div>
												</div>
												<div class="_list_jobs_f1ex">
													<a href="job-detail.html" class="_jb_apply">View Job</a>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="_list_jobs_wraps shadow_0 border">
												<img src="assets/img/job-featured.png" class="_featured_jbs" alt="">
												<div class="_list_jobs_f1ex first">
													<div class="_list_110">
														<div class="_list_110_thumb">
															<a href="employer-detail.html"><img src="assets/img/c-2.png" class="img-fluid" alt=""></a>
														</div>
														<div class="_list_110_caption">
															<h4 class="_jb_title"><a href="job-detail.html">Drupal Designer</a></h4>
															<div class="_emp_jb">Google Inc.</div>
														</div>
													</div>
												</div>
												<div class="_list_jobs_f1ex">
													<div class="_list_110_caption">
														<h4 class="_jb_title">Canada, USA</h4>
														<div class="_emp_jb">Location</div>
													</div>	
												</div>
												<div class="_list_jobs_f1ex">
													<div class="_list_110_caption">
														<h4 class="_jb_title">$135k - $165k</h4>
														<div class="_emp_jb">Yearly</div>
													</div>
												</div>
												<div class="_list_jobs_f1ex">
													<a href="job-detail.html" class="_jb_apply">View Job</a>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="_list_jobs_wraps shadow_0 border">
												<div class="_list_jobs_f1ex first">
													<div class="_list_110">
														<div class="_list_110_thumb">
															<a href="employer-detail.html"><img src="assets/img/c-3.png" class="img-fluid" alt=""></a>
														</div>
														<div class="_list_110_caption">
															<h4 class="_jb_title"><a href="job-detail.html">Magento Developer</a></h4>
															<div class="_emp_jb">Instagram Inc.</div>
														</div>
													</div>
												</div>
												<div class="_list_jobs_f1ex">
													<div class="_list_110_caption">
														<h4 class="_jb_title">Liseo, Canada</h4>
														<div class="_emp_jb">Location</div>
													</div>	
												</div>
												<div class="_list_jobs_f1ex">
													<div class="_list_110_caption">
														<h4 class="_jb_title">$135k - $170k</h4>
														<div class="_emp_jb">Yearly</div>
													</div>
												</div>
												<div class="_list_jobs_f1ex">
													<a href="job-detail.html" class="_jb_apply">View Job</a>
												</div>
											</div>
											
										</div>
									</div>
								</div> --}}
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-12 col-sm-12">
						
							<div class="_jb_summary">
								<div class="_jb_summary_thumb">
									<img src="https://res.cloudinary.com/pilstech/image/upload/v1630685713/proslogo_li2ixf.png" class="img-fluid" alt="" />
								</div>
								<div class="_jb_summary_caption">
									<h4>Pro-filr Limited</h4>
									{{-- <span>Since July 2017</span> --}}
								</div>
								<div class="_jb_summary_body">
									<ul>
										{{-- <li>Company Industry:<span>Consultancy</span></li> --}}
										<li>Email:<span>info@getverifiedpro.com</span></li>
										{{-- <li>Phone<span>+91 120 542 8596</span></li> --}}
										<li>Location<span>Lagos, Nigeria</span></li>
									</ul>
									<div class="_view_profile_btns">
										<a href="{{route('contact')}}" class="btn btn_emplo_eloi">Contact Us</a>
										
                                
									</div>
								</div>
							</div>
							
							{{-- <div class="_jb_summary">
								<h4>Job Explain</h4>
								<ul>
									<li>Company:<span>Invision</span></li>
									<li>Vacancy:<span>03 Open</span></li>
									<li>Post Date:<span>10 Dec 2020</span></li>
									<li>Expire Date:<span>10 Oct 2021</span></li>
									<li>Location:<span>Canada, USA</span></li>
									<li>Salary:<span>$40k - $80k</span></li>
									<li>Rate:<span>$20-$25 hourly</span></li>
									<li>Hours:<span>45h/week</span></li>
								</ul>
							</div> --}}
						
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Main Section End ================================== -->
			
			@include("includes.subscribe")
			
			@endsection