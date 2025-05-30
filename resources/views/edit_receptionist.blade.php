@extends('dashboard')

@section('content')

 <nav aria-label="breadcrumb">
 <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Receptionist</li>
    </ol> 
</nav>

<div class="row mt-4">
	<div class="col-md-8">
    @if(session()->has('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
	@endif
		<div class="card">
			<div class="card-header">Edit Receptionist</div>
			<div class="card-body">
				<form method="POST" action="{{ route('receptionist.edit_validation') }}">
					@csrf
					<div class="form-group mb-3 d-flex">
                    <div class="col-4 text-left"> <label for="name">User Name</label></div>

 		        		<div>
						 <input type="text" name="name" class="form-control" placeholder="Name"  value='{{$data->name}}'/>
		        		@if($errors->has('name'))
		        		<span class="text-danger">{{ $errors->first('name') }}</span>
		        		@endif
						</div>
		        	</div>
		        	<div class="form-group mb-3 d-flex">
                    <div class="col-4 text-left"> <label for="name">User Email</label></div>

 		        		<div><input type="text" name="email" class="form-control" placeholder="Email" value='{{$data->email}}'>
		        		@if($errors->has('email'))
		        			<span class="text-danger">{{ $errors->first('email') }}</span>
		        		@endif</div>
		        	</div>
		        	<div class="form-group mb-3 d-flex">
                    <div class="col-4 text-left"> <label for="name">Password</label></div>

 		        		<div>
						 <input type="password" name="password" class="form-control" placeholder="Password" value='{{$data->password}}'>
		        		@if($errors->has('password'))
		        			<span class="text-danger">{{ $errors->first('password') }}</span>
		        		@endif
						</div>
		        	</div>
		        	<div class="form-group mb-3">
		        		<input type="hidden" name='hidden_id'  value='{{$data->id}}' />
						<input type="submit" class="btn btn-primary" value="Edit" />

		        	</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection