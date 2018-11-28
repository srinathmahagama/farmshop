@include('layout.app');
<a href="/customer">
<button class="btn btn-default">Back</button>
</a>
{!! Form::open(['url'=>'/customerRegister']) !!}
<hr>
<h1>Customer Registration</h1>
<hr>
<div class="form-group">
    <div class="input-group">
    <label>Nic</label>
    <input type="text" class="form-control" name="nic" required placeholder="Enter Nic">
    </div>
</div>
<div class="form-group">
    <div class="input-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname" required placeholder="Enter First Name">
    </div>
</div>
<div class="form-group">
    <div class="input-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="lastname" required placeholder="Enter Last Name">
    </div>
</div><div class="form-group">
    <div class="input-group">
    <label>Mobile</label>
    <input type="text" class="form-control" name="mobile" required placeholder="Enter Mobile No">
    </div>
</div>
<div class="form-group">
    <div class="input-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" required placeholder="Enter Email Address">
    </div>
</div>
<div class="form-group">
    <div class="input-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" required placeholder="Enter your Address">
    </div>
</div>
<button class="btn btn-success">Submit</button>





{!! Form::close() !!}