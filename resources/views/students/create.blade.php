@extends('layout')

@section('mainContent')
    <h1 style="color: darkred">Create Student</h1>

    <hr style="color: rgba();" />

    <h2 style="color: darkblue">Ketu do te regjistroni studentet</h2>

    <br />

    <form class="form-horizontal" method="post" action="/students">
    	@csrf
    	    <fieldset>
    	    	<legend></legend>

    	    	<div class="form-group">
    	    		<label class="col-md-4 control-label" for="student_name">Name</label>
    	    		<div class="col-md-4">
    	    			<input id="student_name" type="text" name="student_name" placeholder="Enter student name" class="form-control input-md">
    	    		</div>
    	    	</div>
    	    	<div class="form-group">
    	    		<label class="col-md-4 control-label" for="student_nrphone">NrPhone</label>
    	    		<div class="col-md-4">
    	    			<input id="student_nrphone" type="text" name="student_nrphone" placeholder="Enter student NrPhone" class="form-control input-md">
    	    		</div>
    	    	</div>
    	    	<div class="form-group">
    	    		<label class="col-md-4 control-label" for="student_address">Address</label>
    	    		<div class="col-md-4">
    	    			<input id="student_address" type="text" name="student_address" placeholder="Enter student Address" class="form-control input-md">
    	    		</div>
    	    	</div>
    	    	<div class="form-group">
    	    		<input type="submit" name="Add Student" value="Add Student" class="btn btn-success">
    	    		<input type="reset" name="Clear" value="Clear" class="btn btn-danger">
    	    	</div>
    	    </fieldset>
    </form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif      
@endsection