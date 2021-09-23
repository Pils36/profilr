    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <div class="modal-header">
                    <h4>Sign In</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="ti-close"></i></span></button>
                </div>
                <div class="modal-body">

                    <div class="login-form">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" placeholder="Email Address" name="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="*******" name="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn dark-2 btn-md full-width pop-login">Login</button>
                            </div>

                        </form>
                    </div>

                    <div class="form-group text-center">
                        <span>Or Signin with</span>
                    </div>

                    <div class="social_logs mb-4">
                        <ul class="shares_jobs text-center">
                            <li><a href="#" class="share fb"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="share gp"><i class="fa fa-google"></i></a></li>
                            <li><a href="#" class="share ln"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="javascript:void(0)"
                            class="theme-cl"> Sign Up</a></div>
                    <div class="mf-forget"><a href="{{ route('password.request') }}"><i class="ti-help"></i>Forget Password</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->


    <!-- Upload Resume -->
    <div class="modal fade" id="upload-resume" tabindex="-1" role="dialog" aria-labelledby="resumeupload"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="resumeupload">
                <div class="modal-header">
                    <h4>Upload Resume</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="ti-close"></i></span></button>
                </div>
                <div class="modal-body">

                    <div class="login-form">
                        <form>

                            <div class="form-row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>E-Mail ID</label>
                                        <input type="email" class="form-control" placeholder="ucicl@gmail.com">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Paste Your Resume</label>
                                <textarea class="form-control ht-150" placeholder="Copy & Paste Resume"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="light">doc, docx,pdf,txt,png</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="uploadResume">
                                    <label class="custom-file-label" for="uploadResume"><i
                                            class="ti-link mr-1"></i>Upload Resume</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn dark-2 btn-md full-width pop-login">Upload
                                    Resume</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Upload Resume -->