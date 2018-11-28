@include('layout.app')
<hr>
<a href="/"><button class="btn btn-default">Back</button></a>
<hr>
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

<hr>
<h1>Farmer's Menu</h1>
<hr>
<a href="/register">
<button class="btn btn-primary btn-lg">Add details</button></a>
<a href="/viewfarmer">
<button class="btn btn-success btn-lg">View Details</button></a>