@csrf
<div class="row">
	<div class="col-sm-6">
        <div class="form-group">
            <input required="" class="form-control" name="first_name" id="first_name" type="text" placeholder="Enter your first name">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <input required="" class="form-control" name="last_name" id="last_name" type="text" placeholder="Enter your last name">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <select class="form-select" id="registration_type" name="registration_type">
			  	<option selected>---Select type---</option>
			  	<option value="Individual">Individual</option>
			  	<option value="Family">Family</option>
			</select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <select class="form-select" id="title" name="title">
			  	<option selected>---Select Title---</option>
			  	<option value="Mr">Mr</option>
			  	<option value="Mrs">Mrs</option>
			  	<option value="Ms">Ms</option>
			  	<option value="Baby">Baby</option>
			</select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <input class="form-control" name="dob" id="dob" type="date" placeholder="Enter your last name">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <select class="form-select" id="gender" name="gender">
			  	<option selected>---Select Gender---</option>
			  	<option value="Male">Male</option>
			  	<option value="Female">Female</option>
			</select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <select class="form-select" id="occupation" name="occupation">
			  	<option selected>---Occupation---</option>
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
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <input required="" class="form-control" name="email" id="email" type="text" placeholder="Enter your email address">
        </div>
    </div>
</div>
<input type="hidden" value="{{ $id }}" name="id">
<input type="hidden" value="member_details_form" name="form_name">
<div class="form-group mt-3">
    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
</div>