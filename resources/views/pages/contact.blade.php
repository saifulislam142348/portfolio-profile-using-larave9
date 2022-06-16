@extends('layout.layout')
@section('content')

<div class="container">
<div class="jumbotron">
    <h1 class="text-success text-center"> Enter your infomation </h1>
    <form class="text-success">
  
    
        <div class="mb-3">
            <label class="form-label"> Your name</label>
            <input type="text" class="form-control" >
            <div class="form-text">We'll never share your name with anyone else.</div>
          </div>
            <div class="mb-3">
                <label class="form-label">Date of birth:</label>
                <input type="date" class="form-control" >
                <div  class="form-text">We'll never share your birth date with anyone else.</div>
              </div>
              <div class="mb-3">
          <label class="form-label">Your height</label>
          <input type="text" class="form-control" >
          <div class="form-text">We'll never share your with anyone else.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" >
            <div id="emailHelp" class="form-text">We'll never share your with anyone else.</div>
          </div>
         
          <div class="mb-3">
            <label class="form-label">Your Adrress:</label>
            <input type="text" class="form-control" >
            <div  class="form-text">We'll never share your with anyone else.</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Your phone number:</label>
            <input type="text" class="form-control" >
            <div  class="form-text">We'll never share your phone number with anyone else.</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" class="form-control" >
            <div  class="form-text">We'll never share your Title with anyone else.</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Description:</label>
            <input type="text" class="form-control" >
            <div  class="form-text">We'll never share your  Description with anyone else.</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Your Image:</label>
            <input type="file" class="form-control" >
            <div  class="form-text">We'll never share your image with anyone else.</div>
          </div>
          <div class="mb-3">
            <label class="form-label">your cv upload:</label>
            <input type="file" class="form-control" >
            <div  class="form-text">We'll never share your with anyone else.</div>
          </div>
        <input type="submit" class="btn btn-primary" value="submit">
      </form>
</div>
   
</div>



@endsection