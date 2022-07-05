@extends('layout.layout')
@section('content')
    <div style="background-image:url({{ asset('images/project-5.jpg') }});">
        <div class="header bg-light.bg-gradient">

            <div style="text-align:center;" class="list-group-item active text-dark ">
                <h2> Admin Dashboard</h2>
                <p> <strong>Welcome admin </strong></p>




            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">

                        <div class="list-group bg-dark">
                            <a href="" class="list-group-item active "> <i  class=" text-success"></i> Dashboard </a>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href=""><span
                                        class=" text-success">Home </span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('home') }}"><span
                                                class=" text-success">create</ <li><a
                                                    class="nav-link " href="{{ route('homelist') }}"><span
                                                        class=" text-success">list</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span
                                        class=" text-success">About</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('about') }}"><span class=" text-success">Create</
                                                    <li><a class="nav-link " href="{{ route('aboutlist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span class=" text-success">Resume </span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('resume') }}"><span class="text-success">Create</
                                                    <li><a class="nav-link " href="{{ route('resumelist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span
                                        class=" text-success">Services</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('service') }}"><span
                                                class="n text-success">Create</ <li><a class="nav-link "
                                                    href="{{ route('servicelist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span
                                        class=" text-success">Skills</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('skill') }}"><span class=" text-success">Create</
                                                    <li><a class="nav-link " href="{{ route('skilllist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span
                                        class=" text-success">Projects</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('project') }}"><span
                                                class=" text-success">Create</ <li><a class="nav-link "
                                                    href="{{ route('projectlist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span
                                        class=" text-success">My blogs</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('blog') }}"><span class=" text-success">Create</
                                                    <li><a class="nav-link " href="{{ route('bloglist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>

                                <a href="{{ route('contact') }}" class="list-group-item text-success"><i
                                        class=" text-success"></i> Contact </a>
                            </div>







                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
