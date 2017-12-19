@extends('layouts.master')

@section('content')
<form action="/crud/{{ $customer->id }}" method="delete">
<input type="hidden" name="_token" value="{{ csrf_field() }}">
<table  width="400">
	<tr>
		<td colspan="4">
		     <h1 class="pull-right">Delete Customer Data</h1>
	    </td>
    </tr>
	<tr>
		<td>	
			<lavel for="name" class="control-label">Name</lavel>
 		</td>
 		<td>
 			<input type="text" name="name" class="form-control"><br>
 		</td>
 		<br>
	</tr>
	
	<tr>
		<td>
			<lavel for="phone" class="control-label">Phone</lavel>
		</td>
		<td>
 		    <input type="phone" name="phone" class="form-control"><br>
		</td>
		
	</tr>
	<tr>
		<td></td>
		<td>
			
			<button type="submit" class="btn btn-primary">Delete</button></td>
	</tr>

</table>
@endsection
