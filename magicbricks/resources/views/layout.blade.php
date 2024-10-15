<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* Custom styles can go here */
  </style>
  @yield('style')
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><span style="color: red;">Magicbricks</span> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Location</a>
            </li>
          </ul>
          <div class="d-flex justify-content-center flex-grow-1">
            <a class="nav-link" href="/">Hostel</a>
          </div>
          @if(Session::get('user'))

          <div class="d-flex justify-content-center flex-grow-1">
            <a class="nav-link" href="hostel">Add Hostel</a>
          </div>
          <a class="nav-link" href="#">Welcome : {{(Session::get('user'))}}</a>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
          
          <button style="color: red;"><a class="nav-link" href="{{route('logout')}}">Logout</a></button>
          @else
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sign Up
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item"  href="login">Login</a></li>
             <li><a class="dropdown-item"  href="register">Register</a></li>
            </ul>
          </div>
          @endif
        </div>
      </div>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>


  <!-- Register page  -->

  <!-- <div class="modal fade" id="registermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
              <label for="email-name" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="name" name="email">
            </div>

            <div class="mb-3">
              <label for="Password-name" class="col-form-label">Password:</label>
              <input type="text" class="form-control" id="name" name="password">
            </div>

            <button type="button" class="btn btn-primary">Register</button>
          </form>
        </div> -->
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div> -->
   

  <!-- Login page -->


  <!-- <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            @csrf

            <div class="mb-3">
              <label for="email-name" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="name" name="email">
            </div>

            <div class="mb-3">
              <label for="Password-name" class="col-form-label">Password:</label>
              <input type="text" class="form-control" id="name" name="password">
            </div>
            <button type="button" class="btn btn-primary">Login</button>

          </form>
        </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div> -->
       
  

  <footer>
    <!-- Footer content goes here -->
  </footer>


  @yield('script')
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>