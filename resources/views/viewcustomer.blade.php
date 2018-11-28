@include('layout.app')

<a href="/customer"><button class="btn btn-default">Back</button></a>
<hr>
<h1>Registered Customers</h1>
<hr>

<table class= "table table-inverse" border=1>
<tr>
    <th>NIC</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Mobile No</th>
    <th>Email</th>
    <th>Address</th>
 </tr>

    @if(count($customers)>0)
        @foreach($customers as $customer)
        <tr>
        <td>{{$customer->nic}}</td>
        <td>{{$customer->firstname}}</td>
        <td>{{$customer->lastname}}</td>
        <td>{{$customer->mobile}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->address}}</td>
        </tr>
        @endforeach
    @endif
   
</table>