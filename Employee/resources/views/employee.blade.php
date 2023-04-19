<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Employee Data</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  

  
</head>
<body>


<br>
<div class="container">
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter Data</h4>
        </div>

        <form action="{{ route('employeedata_store') }}" method="post" enctype="multipart/form-data">
					@csrf
        <div class="modal-body">
        <div class="row">
        <div class="col-md-12">
								<div class="form-group">
									<label>@lang('Username')</label>
									<input type="text" name="username" class="form-control" required>
								</div>

                                <div class="form-group">
									<label>@lang('Email')</label>
									<input type="email" name="email" class="form-control" required>
								</div>

                                <div class="form-group">
									<label>@lang('Phone')</label>
									<input type="number" name="phone" class="form-control" required>
								</div>


								<div class="form-group">
									<label>@lang('Gender')</label>
									<select name="gender" class="form-control">
                                         <option value="">Select One</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
								</div>
							</div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">@lang('Save changes')</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">@lang('Close')</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div> 
</form>
<br>
<br>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Employee Data </h2>
</div>

<div class="pull-right mb-2">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create Employee</button>
</div>
</div>
</div>
<br>
<br>

<table class="table table-bordered"  >
<tr>
<th>S.No</th>
<th>User Name</th>
<th>Email</th>
<th>Phone</th>
<th>Gender</th>
<th width="280px">Action</th>
</tr>

@foreach( $employee as $e)
<tr>
<td>{{ $employee->firstItem() + $loop->index }}</td>
<td>{{$e->username}}</td>
<td>{{$e->email}}</td>
<td>{{$e->phone}}</td>
<td>
    @if($e->gender==1)
	<p>Male</p>
	@elseif($e->gender==2)
	<p>Female</p>
    @elseif($e->gender==3)
	<p>Other</p>
	@endif
</td>
<td>
	<a href="{{ route('employee_edit',$e->id) }}" class="btn btn-primary btn-sm">@lang('Edit')</a>
	<i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="{{ route('employee_destroy',$e->id) }}" class="btn btn-danger btn-sm"  title="Delete the item" onclick="return confirm('Are you sure you want to delete this item?');">
		                  			Delete
	</a></td>
	</tr>
		                  	
		                  	@endforeach
</tr>

</table>
{{$employee->links()}}



</body>

</html>