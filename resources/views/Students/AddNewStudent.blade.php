@extends('Students.layout')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashborad</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('Students.index')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Data of students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Students.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view data of students </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('Students.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add new student  </p>
                  </a>
                </li>
              </ul>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
         <!-- Main content -->
    <section class="content">
      @section('content')
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">ADD NEW DATA OF NEW STUDENT </h3>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
        
                <!-- /.card-header -->
                <!-- form start -->
                <form action= "{{route('Students.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf 
                  <div class="card-body">
                    <div class="mt-5">
                        <label>Name </label>
                        <input type="text" id="name" name="name" class="input w-full border mt-2" placeholder="Name"  value="{{old('name')}}"  >
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                    </div>
                        <div class="form-group">
                          <label>Class Name:</label>
                          <select name="class_id"  class="form-control" placeholder="Class Name">
                              @foreach($Student_data as $classes)
                              <option value="{{$classes->class_id}}">{{$classes->Classes->class_name}}</option>
                              @endforeach
                          </select>
                      </div>
          
          
                      <div class="form-group">
                          <label>Country Name:</label>
                          <select name="country_id"  class="form-control" placeholder="Country Name">
                              @foreach($Student_data as $country)
                              <option value="{{$country->country_id}}">{{$country->Country->name}}</option>
                              @endforeach
                          </select>
                      </div> 
          
          
                    <div class="mt-5">
                        <label>Date Of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" class="input w-full border mt-2" placeholder="date_of_birth" value="{{old('date_of_birth')}}" >
                    </div>
                  </div>
                
                       <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
    </section>
  </div>         
        <!-- END: Content -->
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="www.MASS4.OM">MASS.OM</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>MIAAD AL-FARSI</b>
    </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

@endsection
</body>
</html>
