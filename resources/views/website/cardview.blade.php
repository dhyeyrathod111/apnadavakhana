@extends('layouts.websiteauthlayout')

@section('pagecontent')
	<section class="contact-section" id="grad1">
		<div class="container">
	        <div class="row">
	            {{-- <div class="col-lg-12 mb-100">
	                <div class="section-tittle section-tittle2 text-center">
	                    <span>Appointment Apply Form</span>
	                </div>
	            </div> --}}



	            <div class="container-fluid">
		            <div class="row justify-content-center mt-0">
		                
		                <div class="card" style="padding: 10px;max-width: 660px;">
							<img style="width: auto;height: 340px" src="{{ asset('storage/app') }}/{{ $member->memberdetail->member_image }}">
							<div class="card-body">
							    <div class="row">
							    	<div class="col-md-6">
							    		<p>Name : {{ $member->memberdetail->first_name ." ". $member->memberdetail->last_name }}</p>
							    	</div>
							    	<div class="col-md-6">
							    		<p>Email : {{ $member->memberdetail->email_id }}</p>
							    	</div>
							    	<div class="col-md-6">
							    		<p>contact : {{ $member->contact_no }}</p>
							    	</div>
							    	<div class="col-md-6">
							    		<p>ID : {{ $member->otp }}</p>
							    	</div>
							    </div>
							</div>
						</div>

		                {{-- <div class="col-12 text-center p-0 mt-3 mb-2">
		                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
		                        <h2><strong>Sign Up Your User Account</strong></h2>
		                        <p>Fill all form field to go to next step</p>
		                        <div class="row">
		                            <div class="col-md-12 mx-0">
		                                
		                            </div>
		                        </div>
		                    </div>
		                </div> --}}
		            </div>
		        </div>
	        </div>
	    </div>
	</section>
@endsection


@section('pagescript')
	
	

@endsection