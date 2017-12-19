@extends('layouts.master')

@section('content')
<form action="/customer" method="POST">
	
{{ csrf_field() }}
<table  width="400">
	<tr>
		<td colspan="4">
		     <h1 class="pull-right">Create Customer Data</h1>
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
			
			<button type="submit" class="btn btn-primary">Add New Data</button></td>
	</tr>
</table>
</form>
@endsection
