@extends('layout')

@section('mainContent')
    <h1 style="color: darkred">List Student</h1>

    <hr style="color: rgba();" />

    <h2 style="color: darkblue">Ketu do te menaxhoni studentet</h2>

    <a class="btn btn-primary" href="/students/create">Create New Student</a>

    @if(isset(Auth::user()->email))
        <div class="alert alert-danger success-block">
            <strong>Welcome {{ Auth::user()->email }}</strong>
            <br />
            <a href="{{ url('/account/logout') }}">Logout</a>
        </div>
    @endif

    <br />

    <table class="table table-striped">
    	<thead>
    		<tr>
    		    <th style="text-align: center;">Name</th>
    		    <th style="text-align: center;">NrPhone</th>
    		    <th style="text-align: center;">Address</th>
    	    </tr>
    	</thead>
    	<tbody>
    		@foreach ($students as $student)
    		    <tr>
    		    	<td style="color: green;"><a href="/students/{{$student->id}}">{{$student->student_name}}</a></td>
    		    	<td style="color: red;">{{$student->student_nrphone}}</td>
    		    	<td style="color: blue;">{{$student->student_address}}</td>
    		    </tr>
    		@endforeach
    	</tbody>
    </table>
@endsection