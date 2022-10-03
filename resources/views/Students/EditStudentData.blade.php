@extends('products.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Student.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('Students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Student Name:</strong>
                    <input type="text" name="name" value="{{ $Student->name }}" class="form-control" placeholder="Student Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Class Name:</strong>
                    <input type="text" name="name" value="{{ $Classes->id }}" class="form-control" placeholder="Class Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Country Name:</strong>
                    <input type="text" name="name" value="{{ $Country->id }}" class="form-control" placeholder="Country Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Of Birth </strong>
                    <input type="text" name="name" value="{{ $Student->date_of_birth }}" class="form-control" placeholder="Date Of Birth">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">update</button>
            </div>
        </div>

    </form>
@endsection