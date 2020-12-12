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
					Add Teachers Information
				</div>
				@if(session('success'))
				    <div class="alert alert-success alert-dismissible fade show" role="alert">
							  <strong>{{ session('success') }} </strong> 
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>					
					@endif
				<div class="card-body">
					<form method="POST" action="{{ url('/teachers/update/'.$teachers->id) }}">
						@csrf
						<div class="form-group">
							<label for="name"> Name</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $teachers->name }}" > 
						</div>
							@error('name')
							<strong class="text-danger">{{ $message }}</strong>
							@enderror
						<div class="form-group">
							<label for="email"> Email</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ $teachers->email }}" >
						</div>
							@error('email')
							<strong class="text-danger">{{ $message }}</strong>
							@enderror
						<div class="form-group">
							<label for="phone"> Phone</label>
							<input type="number" class="form-control @error('phone') is-invalid @enderror " name="phone" value="{{ $teachers->phone }}" >
						</div>
							@error('phone')
							<strong class="text-danger">{{ $message }}</strong>
							@enderror
						<div class="form-group">
							<label for="address"> Address</label>
							<input type="text" class="form-control @error('address') is-invalid @enderror " name="address" value="{{ $teachers->address }} " >
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
</div>

@endsection


