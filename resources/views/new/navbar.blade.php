
<!-- navbar of the site -->
<div class="container">
<div class="p-3 mb-2 bg-success text-white">
<nav class="navbar  navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- logo -->
      
    </div>
    <ul class="nav navbar-nav">
      <li class="{{Request::is('/') ? 'active' : ''}}"><a href="{{url('#')}}">Home</a></li>
      <li class="{{Request::is('/') ? 'active' : ''}}"><a href="{{url('#')}}">About</a></li>
      <!-- use active keyword for highlight that menu  -->
      <li class="{{Request::is('#') ? 'active' : ''}}"><a href="{{url('#')}}">Contact</a></li>

    </ul>

    <div class="pull-right">
    <div class="col-sm-4"></div>

    </div>

  </div>
</nav>
</div>
