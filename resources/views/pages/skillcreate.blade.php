@extends('layout.layout')
@section('content')
    <div class="jumbotron bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="jumbotron">
                        <div class="list-group bg-dark">
                            <a href="" class="list-group-item active "> <i class=" text-success"></i> Dashboard </a>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href=""><span class=" text-success">Home </span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('home') }}"><span class=" text-success">create
                                                </ <li><a class="nav-link " href="{{ route('homelist') }}"><span
                                                        class=" text-success">list</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span class=" text-success">About</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('about') }}"><span class=" text-success">Create
                                                </ <li><a class="nav-link " href="{{ route('aboutlist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span class=" text-success">Resume </span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('resume') }}"><span class="text-success">Create
                                                </ <li><a class="nav-link " href="{{ route('resumelist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span class=" text-success">Services</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('service') }}"><span
                                                class="n text-success">Create</ <li><a class="nav-link "
                                                    href="{{ route('servicelist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span class=" text-success">Skills</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('skill') }}"><span class=" text-success">Create
                                                </ <li><a class="nav-link " href="{{ route('skilllist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span class=" text-success">Projects</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('project') }}"><span
                                                class=" text-success">Create</ <li><a class="nav-link "
                                                    href="{{ route('projectlist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown"><a class="dropdown-toggle list-group-item text-primary"
                                    data-toggle="dropdown" href="#"><span class=" text-success">My blogs</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('blog') }}"><span class=" text-success">Create
                                                </ <li><a class="nav-link " href="{{ route('bloglist') }}"><span
                                                        class=" text-success">List</span></a></li>
                                </ul>

                                <a href="{{ route('contact') }}" class="list-group-item text-success"><i
                                        class=" text-success"></i> Contact </a>
                            </div>







                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="jumbotron ">
                        <form class="text-success" action=""  method="post" enctype="multipart/form-data">
                          @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label"> Your name</label>
                                        <input type="text" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Date of birth:</label>
                                        <input type="date" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Gender:</label>
                                        <input type="date" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Your height</label>
                                        <input type="text" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email address</label>
                                        <input type="text" class="form-control">

                                    </div>


                                    <div class="form-group">
                                        <label class="form-label">Your Adrress:</label>
                                        <input type="text" class="form-control">

                                    </div>

                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label class="form-label">Your phone number:</label>
                                        <input type="text" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Education:</label>
                                        <input type="text" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Title:</label>
                                        <input type="text" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Description:</label>
                                        <input type="text" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Your Image:</label>
                                        <input type="file" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">your cv upload:</label>
                                        <input type="file" class="form-control">

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="submit">

                            </div>


                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
