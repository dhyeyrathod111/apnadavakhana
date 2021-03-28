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
	    		<div class="row">
                    <div class="col-md-4">
                        <label class="mt-2 font-weight-bold">Name:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter member name">
                    </div>
                </div>		
	    	</div>
	    </div>
	</main>


@endsection


@section('pageScript')
 	<script src="{{ asset('public/assets/admin/js/memberarea.js') }}"></script>
@endsection
