@extends('students.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Add New Students</h2>
    </div>

    <div class="pull-right">
    <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
    </div>
    </div>
    </div> 

@if ($errors->any())
 <div class="alert alert-danger">
 <strong>ERROR !</strong>There were some problems with your input.<br><br>
 <ul>
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
 </ul>
</div>
@endif

<form action="{{route('students.store')}}" method="post">
@csrf
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>MatricNo:</strong>
<input type="text" name="matric_no" class="form-control" placeholder="matric_no">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Gender:</strong>
<input type="text" name="gender" class="form-control" placeholder="gender">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Date of Birth:</strong>
<input type="text" name="date_of_birth" class="form-control" placeholder="date_of_birth">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Marital Status</strong>
<input type="text" name="marital_status" class="form-control" placeholder="marital_status">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Religion:</strong>
<input type="text" name="religion" class="form-control" placeholder="religion">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Active status:</strong>
<input type="text" name="active_status" class="form-control" placeholder="active_status">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Year of studys:</strong>
<input type="text" name="year_of_study" class="form-control" placeholder="year_of_study">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>IC:</strong>
<input type="text" name="id_no" class="form-control" placeholder="id_no">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Email:</strong>
<input type="text" name="email" class="form-control" placeholder="email">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
