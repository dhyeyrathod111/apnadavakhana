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
				                <th>Unique Id</th>
				                <th>Name</th>
				                <th>contact Number</th>
				                <th>Email</th>
				                <th>Created date</th>
				                <th>View card</th>
				                <th>Action</th>
				                
				            </tr>
				        </thead>
				        <tbody>
				        	
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
 	<script type="text/javascript">
		$(document).ready(()=>load_member_datatable());
 		const load_member_datatable = props => {
		    var dataTable = $('#membertable').DataTable({
		        "processing": true,
		        "serverSide": true,
		        "autoWidth" : false,
		        "order": [],
		        "columnDefs": [
		            {
		                "targets": [],
		                "orderable": false,
		            },
		        ],
		        "ajax": {
		            url: '{{ route('datatable_memberlist') }}',
		            type: "POST",
		            data: {
		                "_token": "{{ csrf_token() }}",
		            }
		        },
		        "bDestroy": true
		    });
		}
 	</script>
@endsection
