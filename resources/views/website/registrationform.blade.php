@extends('layouts.websiteauthlayout')

@section('pagecontent')
	<section class="contact-section">
		<div class="container">
	        <div class="row">
	            <div class="col-lg-12 mb-100">
	                <div class="section-tittle section-tittle2 text-center">
	                    <span>Appointment Apply Form</span>
	                </div>
	            </div>
	            <div class="col-lg-8">
	            	<div id="alert_message"></div>
	                <form class="form-contact contact_form" action="{{ url('member') }}" id="ragistrationform">
	                	@csrf
	                    <div class="row">
	                        <div class="col-sm-6">
	                            <div class="form-group">
	                                <input required class="form-control valid" name="contact_no" id="contact_no" type="text" placeholder="Enter your contact number">
	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group mt-3">
	                    	<input type="hidden" value="contact_number" name="form_name">
	                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
	                    </div>
	                </form>
	            </div>
	            <div class="col-lg-3 offset-lg-1">
	                <div class="media contact-info">
	                    <span class="contact-info__icon"><i class="ti-home"></i></span>
	                    <div class="media-body">
	                        <h3>Buttonwood, California.</h3>
	                        <p>Rosemead, CA 91770</p>
	                    </div>
	                </div>
	                <div class="media contact-info">
	                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
	                    <div class="media-body">
	                        <h3>+1 253 565 2365</h3>
	                        <p>Mon to Fri 9am to 6pm</p>
	                    </div>
	                </div>
	                <div class="media contact-info">
	                    <span class="contact-info__icon"><i class="ti-email"></i></span>
	                    <div class="media-body">
	                        <h3>support@colorlib.com</h3>
	                        <p>Send us your query anytime!</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
@endsection


@section('pagescript')
	
	<script src="{{ asset('public/') }}/assets/js/ragistration.js"></script>

@endsection