@extends('layouts.adminlayout')

@section('content')

	<main class="app-content">
	    <div class="app-title">
	        <div>
	            <h1><i class="fa fa-dashboard"></i> Member area</h1>
	        </div>
	        <ul class="app-breadcrumb breadcrumb">
	            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	            <li class="breadcrumb-item"><a href="#">Member area</a></li>
	        </ul>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="tile">
	    			<div class="text-right pb-3"> 
	    				<a href="{{ url('admin/create') }}" class="btn btn-info" type="button">Create new member</a>
	    			</div>
		    		<table id="membertable" class="table table-striped table-bordered" style="width:100%">
			        	<thead>
				            <tr>
				                <th>Name</th>
				                <th>Position</th>
				                <th>Office</th>
				                <th>Age</th>
				                <th>Start date</th>
				                <th>Salary</th>
				            </tr>
				        </thead>
				        <tbody>
				        	<tr>
				                <td>Tiger Nixon</td>
				                <td>System Architect</td>
				                <td>Edinburgh</td>
				                <td>61</td>
				                <td>2011/04/25</td>
				                <td>$320,800</td>
				            </tr>
				            <tr>
				                <td>Garrett Winters</td>
				                <td>Accountant</td>
				                <td>Tokyo</td>
				                <td>63</td>
				                <td>2011/07/25</td>
				                <td>$170,750</td>
				            </tr>
				        </tbody>
			        </table>
	    		</div>
	    		
	    	</div>
	    </div>
	</main>


@endsection


@section('pageScript')
 	<script src="{{ asset('public/assets/admin/js/plugins/jquery.dataTables.min.js') }}"></script>
 	<script src="{{ asset('public/assets/admin/js/plugins/dataTables.bootstrap.min.js') }}"></script>
 	<script src="{{ asset('public/assets/admin/js/memberarea.js') }}"></script>
@endsection
