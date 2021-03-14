@csrf
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <input class="form-control" name="otp" id="otp" type="number" placeholder="Enter otp" required>
        </div>
    </div>
</div>
<input type="hidden" value="{{ $id }}" name="id">
<div class="form-group mt-3">
	<input type="hidden" value="contact_number" name="form_name">
    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
</div>