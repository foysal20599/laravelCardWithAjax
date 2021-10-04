@extends('welcome')


@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-sm-8">
    			<div class="card">
    				<div class="card-header">
    					All Employee List
    				</div>
    				<div class="card-body">
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
						     <tr>
						      <th scope="row">1</th>
						      <td>Foysal Ahmed</td>
						      <td>foysal20599@gmail.com</td>
						      <td>01776920599</td>
						      <td>Dhaka</td>
						      <td>
						      	<a href="" class="btn btn-sm btn-success"> Edit</a>
						      	<a href="" class="btn btn-sm btn-danger"> Delete</a>
						      </td>
						    </tr> 
						  </tbody>
						</table>
					</div>
    			</div>
    		</div>

    		<div class="col-sm-4">
    			<div class="card">
    				<div class="card-header">
    					<span id="addT" >Add Employee </span>
    					<span id="updateT" >Update Employee </span>
    				</div>
    				<div class="card-body">
    					<form action="">
    						<div class="form-group">
    							<div for="text" class="label">Name</div>
    							<input type="text" class="form-control" name="name" placeholder="Enter your name" >
    						</div>
    						<div class="form-group">
    							<div for="text" class="label">Email</div>
    							<input type="email" class="form-control" name="email" placeholder="Enter your email" >
    						</div>
    						<div class="form-group">
    							<div for="text" class="label">Phone</div>
    							<input type="number" class="form-control" name="phone" placeholder="Enter your phone" >
    						</div>
    						<div class="form-group">
    							<div for="text" class="label">Address</div>
    							<input type="text" class="form-control" name="address" placeholder="Enter your address" >
    						</div>
    						<input type="submit" id="addbutton" value="Add" class="btn btn-info">
    						<input type="submit" id="updatebutton" value="Update" class="btn btn-success">
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

   <script>
    	$('#addT').show();
    	$('#updateT').show();
    	$('#updateE').hide();
    	$('#updatebutton').hide();
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]'.attr('content'))
    }
});

function allData(){
	$.ajax({
        type: "GET",
        dataType: "json",
        url:"/employee/all",
        success::function(data){
           
        }		
	})
}
    

    	
    </script>

@endsection


