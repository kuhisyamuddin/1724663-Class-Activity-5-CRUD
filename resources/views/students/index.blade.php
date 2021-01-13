@extends('students.layout')
@section('content')
<div class="pull-left">
    <h2>IIUM Student</h2>
    </div>

    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-right">
    <a class="btn-btn-success" href="{{route('students.create')}}">Create New Student</a>
    </div>
    </div>
    </div>
@if ($message=Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
    <th>id</th>
    <th>Matric No</th>
    <th>Gender</th>
    <th>Date of Birth</th>
    <th>Marital Status</th>
    <th>Religion</th>
    <th>Active Status</th>
    <th>Year of Study</th>
    <th>IC</th>
    <th>Email</th>
</tr>
@foreach($students as $student)
<tr>
    <td>{{++$i}}</td>
    <td>{{$student->matric_no}}</td>
    <td>{{$student->gender}}</td>
    <td>{{$student->date_of_birth}}</td> 
    <td>{{$student->marital_status}}</td> 
    <td>{{$student->religion}}</td>
    <td>{{$student->active_status}}</td>
    <td>{{$student->year_of_study}}</td> 
    <td>{{$student->id_no}}</td>
    <td>{{$student->email}}</td>
    <td>
    <form action="{{route('students.destroy',$student->id)}}" method="post">
        <a class="btn btn-info" href="{{route('students.show',$student->id)}}">Show</a>
        <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
</tr>
@endforeach
</table>      