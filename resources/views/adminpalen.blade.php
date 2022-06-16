@extends('layout.layout')
@section('content')
	<div style="background-image:url({{asset('images/project-5.jpg')}});">
<div class="header bg-light.bg-gradient">
	
    <div style="text-align:center;" class="list-group-item active text-dark "><h2> Admin Dashboard</h2> 
        <p>Welcome <strong><></strong></p>
        <p>  </p>
    
    
    
    </div>
    </div>
    <nav class="navbar navbar-primary">
    <div class="container-fluid">
        <div class="navbar-header">
            
            
        </div>
        
        
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <div class="list-group bg-dark">
                <a href="" class="list-group-item active "> <i class="glyphicon glyphicon-dashboard text-success"></i> Dashboard </a>
                <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user text-success">Home </span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-education text-success">create</
                      <li><a class="nav-link " href="#"><span class="glyphicon glyphicon-education text-success">list</span></a></li>
                    </ul>
                  </div>
                <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user text-success">About</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="{{url('aboutinsert')}}"><span class="glyphicon glyphicon-education text-success">Create</
      <li><a class="nav-link " href="#"><span class="glyphicon glyphicon-education text-success">List</span></a></li>
    </ul>
  </div>
  <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user text-success">Resume </span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-education text-success">Create</
      <li><a class="nav-link " href="#"><span class="glyphicon glyphicon-education text-success">List</span></a></li>
    </ul>
  </div>
  <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user text-success">Services</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-education text-success">Create</
      <li><a class="nav-link " href="#"><span class="glyphicon glyphicon-education text-success">List</span></a></li>
    </ul>
  </div>
  <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user text-success">Skills</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-education text-success">Create</
      <li><a class="nav-link " href="#"><span class="glyphicon glyphicon-education text-success">List</span></a></li>
    </ul>
  </div>
  <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user text-success">Projects</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-education text-success">Create</
      <li><a class="nav-link " href="#"><span class="glyphicon glyphicon-education text-success">List</span></a></li>
    </ul>
  </div>
  <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user text-success">My blogs</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-education text-success">Create</
      <li><a class="nav-link " href="#"><span class="glyphicon glyphicon-education text-success">List</span></a></li>
    </ul>
  </div>
    
                <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Contact
                </a>
                
             <a class="list-group-item text-danger" href="" >logout</a>
                
                

            </div></div>   
            </div>
            
        </div>
    </div>
        
    </div>
@endsection