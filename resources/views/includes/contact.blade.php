<section class="contact-section section-padding-all">
    <div class="default-container">
        <div class="row clearfix">
            <div class="con-title-column col-lg-12 col-md-12 col-sm-12">
                <!--Sec Title-->
                <div class="sec-con-title text-center centered mx-auto">
                    <div class="con-title-text con-title-border-l">We can attend to you anytime</div>
                    <h2>Contact Us for any Query</h2>
                    <div class="text">You can reach us 24/7 and we are always available to help</div>
                </div>
            </div>
        </div>
        <div class="row vertical-content-manage clearfix">
            <div class="col-lg-5">
                <div class="contact-info-box mt-3 animated">
                    <div class="contact-details-content p-3 mt-3">
                        <div class="contact-detail">
                            <h6 class="font-weight-bold">Address</h6>
                            <p class="text-muted mb-0">Abeokuta,
                                <br> Ibara Housing Estate</p>
                        </div>
                    </div>

                    <div class="contact-details-content p-3 mt-3">
                        <div class="contact-detail">
                            <h6 class="font-weight-bold">Mail</h6>
                            <p class="text-muted mb-0">support@yoduministry.org</p>
                            <p class="text-muted mb-0">info@yoduministry.org</p>
                        </div>
                    </div>

                    <div class="contact-details-content p-3 mt-3">
                        <div class="contact-detail">
                            <h6 class="font-weight-bold">Call</h6>
                            <p class="text-muted mb-0">+234 909 9094 209,
                                <br>+234 813 7666 121.</p>
                        </div>
                    </div>

                    <div class="contact-details-content p-3 mt-3">
                        <div class="contact-detail">
                            <h6 class="font-weight-bold">Counseling Lines</h6>
                            <p class="text-muted mb-0">+234 909 9094 209,
                                <br>+234 813 7666 121.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="business_form_custom mt-3">
                    <form action="{{route('postContact')}}" method="POST">
                        @csrf 
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." required="" value="{{ old('name')}}">
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required=""  value="{{ old('email')}}">
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject.." required="" value="{{ old('subject')}}">
                                    <small class="text-danger">{{ $errors->first('subject') }}</small>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..." required="" value="{{ old('comments')}}"></textarea>
                                    <small class="text-danger">{{ $errors->first('comments') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" form-group">
                                    <input type="submit" class="btn btn_custom corpo-r-btn btn-style-two" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>