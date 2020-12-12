@extends('welcome')

@section('content')
<div class="jumbotron text-center" >
  <h1 >Welcome our Page</h1>   
</div>            

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header text-center">
					All Teachers List
				</div>

					@if(session('update'))
				    <div class="alert alert-success alert-dismissible fade show" role="alert">
							  <strong>{{ session('update') }} </strong> 
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>					
					@endif


					@if(session('delete'))
				    <div class="alert alert-success alert-dismissible fade show" role="alert">
							  <strong>{{ session('delete') }} </strong> 
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>					
					@endif
			
			
			<table class="table table-bordered text-center">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Phone</th>
				      <th scope="col">Address</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
                   @foreach($teachers as $teacher)
                   

				    <tr>
				      <th scope="row">{{ $teacher->id }}</th>
				      <td>{{ $teacher->name }}</td>
				      <td>{{ $teacher->email }}</td>
				      <td>{{ $teacher->phone }}</td>
				      <td>{{ $teacher->address }}</td>
				      <td>
				      	<div class="text-center">
				      		<a href="{{ url('/teachers/edit/'.$teacher->id ) }}" class="btn btn-sm btn-info">Edit</a>
				      		<a href="{{ '/teachers/delete/'.$teacher->id }}"  class="btn btn-sm btn-danger">Delete</a>
				      	</div>

				      </td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
				</div>
			</div>
		

		<div class="col-md-4">
			<div class="card">
				<div class="card-header text-center">
					Add Teachers Information
				</div>
			

				<div class="card-body">
					<form method="POST" action="{{ url('student/store') }}">
						@csrf
						<div class="form-group">
							<label for="name"> Name</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your name">
						</div>
							@error('name')
							<strong class="text-danger">{{ $message }}</strong>
							@enderror
						<div class="form-group">
							<label for="email"> Email</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror " name="email" placeholder="Enter your email">
						</div>
							@error('email')
							<strong class="text-danger">{{ $message }}</strong>
							@enderror
						<div class="form-group">
							<label for="phone"> Phone</label>
							<input type="number" class="form-control @error('phone') is-invalid @enderror " name="phone" placeholder="Enter your phone">
						</div>
							@error('phone')
							<strong class="text-danger">{{ $message }}</strong>
							@enderror
						<div class="form-group">
							<label for="address"> Address</label>
							<input type="text" class="form-control @error('address') is-invalid @enderror " name="address" placeholder="Enter your address">
						</div>
							@error('address')
							<strong class="text-danger">{{ $message }}</strong>
							@enderror
						<div class="text-center">
							<input type="submit" class="btn btn-success" value="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<h1>cniosc</h1>
</div>


@if(session('success'))  
<script>             
Swal.fire({
position: 'top-end',
              icon: 'success',
             title: 'Your work has been saved',
              showConfirmButton: false,
            timer: 1500
            });
 </script>

@endif

@endsection


