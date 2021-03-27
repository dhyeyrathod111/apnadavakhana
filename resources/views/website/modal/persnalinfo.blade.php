<div class="form-card">
    <h2 class="fs-title">Member Information</h2>
    <P>First name : {{ $memberdetails->first_name }}</P>
    <P>Last name : {{ $memberdetails->last_name }}</P>
    <P>Registration type : {{ $memberdetails->registration_type }}</P>
    <P>Date of Birth : {{ $memberdetails->dob }}</P>
    <P>Gender : {{ $memberdetails->gender }}</P>
</div>
<input type="button" onclick="previous_form($('#fildset_3'),$('#fildset_2'))" class="previous action-button-previous" value="Previous" /> 
<input type="button" class="next action-button" value="Confirm & Proceed to payment" />