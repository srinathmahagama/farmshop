@include('layout.app')

<a href="/farmer"><button class="btn btn-default">Back</button></a>
<hr>
<h1>Registered Farmers</h1>
<hr>
<table class="table table-inverse" border=1>
    <tr>
        <th>NIC</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mobile No</th>
        <th>Address</th>
    </tr>

    @if(count($farmers)>0)
        @foreach($farmers as $farmer)
        <tr>
            <td>{{$farmer->nic}}</td>
            <td>{{$farmer->firstname}}</td>
            <td>{{$farmer->lastname}}</td>
            <td>{{$farmer->mobile}}</td>
            <td>{{$farmer->address}}</td>
        </tr>
        @endforeach
    @endif

</table>