@include('layout.app')
<a href="/">
<button class="btn btn-default">Back</button>
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
</a>
<hr>
<h1>Customer's Menu</h1>
<hr>
<a href="/customerRegister">
<button class="btn btn-primary btn-lg">Add Customer Details</button>
</a>
<a href="/viewcustomer">
<button class="btn btn-primary btn-lg">View Customer Details </button>
</a>