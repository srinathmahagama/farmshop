@include('layout.app')
<a href="/farmer"><button class="btn btn-default">Back</button></a>

<hr>
<h1>Farmer Registration</h1>
<hr>


{!! Form::open(['url'=>'/farmerRegister']) !!}



<div class="form-group">
<!-- form for get basic login details -->
   
    <div class="input-group">
    <!-- username -->
    <label>NIC</label>
    <input type="text" class="form-control" name="nic" required placeholder="Enter NIC">
   </div></div>

    <div class="form-group">
   <div class="input-group">
    <!-- username -->
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname" required placeholder="Enter FIrst Name">
   </div></div>
   <div class="form-group">
   <div class="input-group">
    <!-- username -->
    <label>Last Name</label>
    <input type="text" class="form-control" name="lastname" required placeholder="Enter Last Name">
   </div></div>

    <div class="form-group">
   <div class="input-group">
    <!-- username -->
    <label>Mobile</label>
    <input type="text" class="form-control" name="mobile" required placeholder="Enter Mobile">
   </div></div>

    <div class="form-group">
   <div class="input-group">
    <!-- username -->
    <label>Address</label>
    <input type="text" class="form-control" name="address" required placeholder="Enter Address">
   </div></div>


    <button type="submit" class="btn btn-primary">Submit</button>
</div>


{!! Form::close() !!}
