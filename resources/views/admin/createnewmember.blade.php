@extends('layouts.adminlayout')

@section('content')

	<main class="app-content">
	    <div class="app-title">
	        <div>
	            <h1><i class="fa fa-dashboard"></i> Create new member </h1>
	        </div>
	        <ul class="app-breadcrumb breadcrumb">
	            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	            <li class="breadcrumb-item"><a href="#">Create new member</a></li>
	        </ul>
	    </div>
	    <div class="row">
	    	<div class="tile w-100">
	    		<form id="member_details_form" enctype="multipart/form-data" action="{{ url('admin') }}">
	    			@csrf
	    			<div id="alert_message"></div>
	    			<div style="padding: 10px 0px  9px 0px;text-align: center;">
	                	<h3 class="tile-title">Primary Member Details</h3>	
	                </div>
		    		<div class="row">
		    			<div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Mobile number:</label>
	                        <input type="text" class="form-control" name="mobile_no" required id="mobile_no">
	                    </div>
		    			<div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">First name:</label>
	                        <input type="text" id="first_name" name="first_name" required class="form-control">
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Last name:</label>
	                        <input type="text" id="last_name" name="last_name" required class="form-control">
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Email ID:</label>
	                        <input type="text" id="email_id" name="email_id" required class="form-control">
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Type:</label>
	                        <select required name="type" id="type" class="form-control">
	                            <option value="Individual">Individual</option>
	                            <option value="Family">Family</option>
	                        </select>
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Salutation:</label>
	                        <select required name="salutation" id="salutation" class="form-control">
	                            <option value="">---Select salutation---</option>
	                            <option value="Mr">Mr</option>
	                            <option value="Mrs">Mrs</option>
	                            <option value="Ms">Ms</option>
	                            <option value="Master">Master</option>
	                            <option value="Baby">Baby</option>
	                            <option value="Dr">Dr</option>
	                            <option value="Prof">Prof</option>
	                        </select>
	                    </div>
	                    
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Date Of Birth:</label>
	                        <input required type="text" readonly id="date_of_birth" name="date_of_birth" class="form-control">
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Gender:</label>
	                        <select required name="gender" id="gender" class="form-control">
	                            <option value="Male">Male</option>
	                            <option value="Female">Female</option>
	                        </select>
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Occupation:</label>
	                        <select required class="form-control dropdown" id="occupation" name="occupation">
		                        <option value="" selected="selected">-- Select one --</option>
		                        <option value="Govt Employee">-  Govt Employee</option>
		                        <option value="Private Employee">-  Private Employee</option>
		                        <option value="Doctor">-  Doctor</option>
		                        <option value="Advocate">-  Advocate</option>
		                        <option value="Engineer">-  Engineer</option>
		                        <option value="Police">-  Police </option>
		                        <option value="Defence Service">-  Defence Service</option>
		                        <option value="Business">-  Business</option>
		                        <option value="Housewife">-  Housewife</option>
		                        <option value="Students">-  Students</option>
		                        <option value="Retired Person">-  Retired Person</option>
		                        <option value="Others">-  Others</option>
		                    </select>
	                    </div>
	                    <div class="col-md-12 mt-3">
	                        <label class="font-weight-bold">User image:</label>
	                        <input required type="file" id="member_image" name="member_image" class="form-control">
	                    </div>
	                </div>	
	                <div style="padding: 50px 0px  9px 0px;text-align: center;">
	                	<h3 class="tile-title">Address Details</h3>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <label class="font-weight-bold">Address:</label>
	                        <textarea required class="form-control" id="address" rows="3" name="address"></textarea>
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Road / Area:</label>
	                        <input type="text" id="road_area" name="road_area" class="form-control">
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">State:</label>
	                        <select required class="form-control dropdown" id="state" name="state">
	                        	<option value="">-- Select state --</option>
	                        	@foreach ($states as $onestates)
		                        	<option value="{{ $onestates->id }}">{{ $onestates->name }}</option>
		                        @endforeach
		                    </select>
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">City / District:</label>
	                        <input required type="text" id="city_district" name="city_district" class="form-control">
	                    </div>
	                    <div class="col-md-4 mt-3">
	                        <label class="font-weight-bold">Pincode:</label>
	                        <input required type="number" id="pincode" name="pincode" class="form-control">
	                    </div>
	                </div>
	                <div class="row">
	                	<div class="col-md-4 mt-3"></div>
	                	<div class="col-md-4 mt-3">
	                		<button type="submit" id="member_create_btn" class="btn btn-primary btn-lg btn-block" type="button">Create member</button>
	                	</div>
	                	<div class="col-md-4 mt-3"></div>
	                </div>
	    		</form>
	    	</div>
	    </div>
	</main>


@endsection


@section('pageScript')
	<script src="{{ asset('public/assets/admin/js/plugins/jquery.dataTables.min.js') }}"></script>
 	<script src="{{ asset('public/assets/admin/js/plugins/dataTables.bootstrap.min.js') }}"></script>
 	<script src="{{ asset('public/assets/admin/js/plugins/bootstrap-datepicker.min.js') }}"></script>
 	<script src="{{ asset('public/assets/admin/js/memberarea.js') }}"></script>
 	<script type="text/javascript">
 		$('#date_of_birth').datepicker({
	      	format: "dd/mm/yyyy",autoclose: true,todayHighlight: true
	    });
 	</script>
@endsection
