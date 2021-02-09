@extends('layout')

@section('mainContent')
    <h1 style="color: darkred">Show Student</h1>

    <hr style="color: rgba();" />

    <h2 style="color: darkblue">Ketu do te shfaqen studentet</h2>

    <br />

    <div style="color: darkred">
    	<strong>{{$student->student_name}}</strong>
    	<strong>{{$student->student_nrphone}}</strong>
    	<strong>{{$student->student_address}}</strong>
    </div>

    <a href="/students/{{$student->id}}/edit">Edit Student</a>
@endsection