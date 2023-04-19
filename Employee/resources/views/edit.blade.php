<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Employee</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Employee</h2>
</div>
<div class="pull-right">

</div>
</div>
</div>

<form action="{{ url('employee_update') }}" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{$employee->id}}">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<strong>Username:</strong>
<input type="text" name="username" value="{{ $employee->username }}" class="form-control" >

</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<strong>Email:</strong>
<input type="email" name="email" class="form-control"  value="{{ $employee->email }}">

</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<strong>Phone:</strong>
<input type="number" name="phone" class="form-control"  value="{{ $employee->phone }}">

</div>
</div>


<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<strong>Gender:</strong>
<?php
                            $c1=$c2=$c3="";
                            if($employee->gender==1)
                            {
                                $c1="selected";
                            }
                            else if($employee->gender==2)
                            {
                                $c2="selected"; 
                            }
                            else if($employee->gender==3)
                            {
                                 $c3="selected";
                            }
                           
                            ?>
<select name="gender" class="form-control">
                                        
                                        <option value="1"<?=$c1?>>Male</option>
                                        <option value="2"<?=$c2?>>Female</option>
                                        <option value="3"<?=$c3?>>Other</option>
                                    </select>

</div>
</div>
<a class="btn btn-primary" href="{{ route('employee') }}" enctype="multipart/form-data"> Back</a>
<button type="submit" class="btn btn-primary ml-3">Update</button>
</div>
</form>
</div>
</body>
</html>