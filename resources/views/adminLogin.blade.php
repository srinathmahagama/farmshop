@include('layout.app')
@if(session('success'))
    <div class="alert alert-danger">
        {{session('success')}}
    </div>
@endif
<div class="navbar-header">
<img src="img/business.png" width="250" height="250">
</div>

<hr>
<h1>ADMIN</h1>
<hr>
<div class="col-sm-1"></div>

{!! Form::open(['url'=>'/adminLogin']) !!}

<div class="form-group">
    <div class="input-group">
    <label>User Name</label>
    <input type='text' class="form-control" name= 'username' required placeholder="Enter user name">
    </div>
</div>
<div class="col-sm-1"></div>
<div class="form-group">
    <div class="input-group">
    <label>Password</label>
    <input type='password' class="form-control" name= 'password' required  placeholder="Enter password">
    </div>
</div>
<div class="col-sm-1"></div>
<button type = 'submit' class ='btn btn-success'>Submit</button>
{!! Form::close() !!}
