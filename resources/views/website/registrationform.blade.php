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
		                <div class="col-12 text-center p-0 mt-3 mb-2">
		                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
		                        <h2><strong>Sign Up Your User Account</strong></h2>
		                        <p>Fill all form field to go to next step</p>
		                        <div class="row">
		                            <div class="col-md-12 mx-0">
		                                <div id="msform">
		                                    <ul id="progressbar">
		                                        <li class="active" id="account"><strong>Verify Mobile Number</strong></li>
		                                        <li id="personal"><strong>Personal</strong></li>
		                                        <li id="payment"><strong>Payment</strong></li>
		                                        <li id="confirm"><strong>Finish</strong></li>
		                                    </ul>
		                                    <div style="padding: 0px 40px 10px 40px;" id="alert_message"></div>
		                                    <fieldset id="fildset_1">
		                                    	<form action="{{ route('otp_process') }}" id="otpform">
		                                    		@csrf
		                                    		<div class="form-card">
			                                            <input type="number" name="otp" placeholder="Enter OTP" />
			                                        </div>
			                                        <input type="hidden" value="{{ $member->id }}" name="id">
			                                        <input type="submit" name="next" class="next action-button" value="Next Step" />
		                                    	</form>
		                                    </fieldset>
		                                    <fieldset id="fildset_2">
		                                    	<form action="{{ url('member_details') }}" id="persnal_details_form">
		                                    		@csrf
			                                        <div class="form-card">
			                                            <h2 class="fs-title">Personal Information</h2>
			                                            <input type="text" name="first_name" placeholder="First Name" /> 
			                                            <input type="text" name="last_name" placeholder="Last Name" />
			                                            <input type="text" name="registration_type" placeholder="Type" />
			                                            <input type="text" name="title" placeholder="title" />
			                                            <input type="date" name="dob" placeholder="Enter date of birth" />
			                                            <input type="text" name="gender" placeholder="Enter Gender" />
			                                        </div>
			                                        <input type="hidden" value="{{ $member->id }}" name="member_id">
			                                        <input type="submit" name="next" class="next action-button" value="Next Step" />
			                                    </form>
		                                    </fieldset>
		                                    <fieldset id="fildset_3">

		                                    </fieldset>
		                                    {{-- <fieldset id="fildset_3">
		                                        <div class="form-card">
		                                            <h2 class="fs-title">Member Information</h2>
		                                            <div class="radio-group">
		                                                <div class='radio' data-value="credit">
		                                                	<img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
		                                                <div class='radio' data-value="paypal">
		                                                	<img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
		                                                <br>
		                                            </div>
		                                            <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
		                                            <div class="row">
		                                                <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
		                                                <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
		                                                <div class="col-9">
		                                                    <select class="list-dt" id="month" name="expmonth">
		                                                        <option selected>Month</option>
		                                                        <option>January</option>
		                                                        <option>February</option>
		                                                        <option>March</option>
		                                                        <option>April</option>
		                                                        <option>May</option>
		                                                        <option>June</option>
		                                                        <option>July</option>
		                                                        <option>August</option>
		                                                        <option>September</option>
		                                                        <option>October</option>
		                                                        <option>November</option>
		                                                        <option>December</option>
		                                                    </select>
		                                                    <select class="list-dt" id="year" name="expyear">
		                                                        <option selected>Year</option>
		                                                    </select>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
		                                    </fieldset> --}}
		                                    <fieldset id="fildset_4">
		                                        <div class="form-card">
		                                            <h2 class="fs-title text-center">Success !</h2>
		                                            <br><br>
		                                            <div class="row justify-content-center">
		                                                <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
		                                            </div>
		                                            <br><br>
		                                            <div class="row justify-content-center">
		                                                <div class="col-7 text-center">
		                                                    <h5>You Have Successfully Signed Up</h5>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </fieldset>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
	        </div>
	    </div>
	</section>
@endsection


@section('pagescript')
	
	<script src="{{ asset('public/') }}/assets/js/ragistration.js"></script>
	<script type="text/javascript">
		function load_persnalinformation_table(member_id) {
		    $.ajax({
		        type: "POST",
		        url: '{{ route('loadpersnalinformation') }}',
		        data: {member_id:member_id,"_token":"{{ csrf_token() }}"}, 
		        success: response => {  
		            if (response.status == true) {
		            	$('#fildset_3').html(response.html_str);
		            } else {
	                    notify_error(response.message);
	                }
		        },
		        error: response => {
		            console.log(response);notify_error();
		        }
		    });
		}
	</script>

@endsection