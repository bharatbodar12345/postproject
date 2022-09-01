<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <!-- jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Post Project</title>
<style>
    .error{
        color: red;
    } 
</style>
<body>

    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/home">Home</a>
                
            </li>
              
            @if(Auth::check())
            <li class="nav-item">
              @if(Auth::user()->role == 0)
            <a class="nav-link" href="/user/profile">Profile</a>
            @else
            <a class="nav-link" href="/profile">Profile</a>
            @endif
            </li>
            
            <li>
                <a class="nav-link" href="/logout">Logout</a>
            </li>
            <li class="nav-item">
              @if(Auth::user()->role == 0)
              <a class="nav-link" href="/showpost/user">Post</a>
              
              @else
              <a class="nav-link" href="/admin/postshow">Post</a>
              {{-- {{dd('else')}} --}}
              @endif
              
          </li>
            @endif
        
            </ul>
           
          </div>
        </div>
      </nav>

    @yield('home')
   

    @yield('test')
    
    @include('footer')