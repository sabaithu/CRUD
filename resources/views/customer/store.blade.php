@extends('layouts.master')
<h1>Store Page</h1>
@section('content')
<form action="/" method="POST">
{{ csrf_field() }}
<table class="table responsive">
	<tr>
		<td colspan="4">
		     <h1 class="pull-right">Create</h1>
	    </td>
    </tr>
	<tr>
		<th>	
			<lavel for="name" class="control-label">Name</lavel>
 		    <input type="text" name="name" class="form-control" >
 		</th>
		<th>
			<lavel for="phone" class="control-label">Phone</lavel>
 		    <input type="phone" name="phone" class="form-control">
		</th>
		
		
	</tr>
	
	<tr>
		<td><button type="submit" class="btn btn-primary">Add New Data</button></td>
	</tr>

</table>
@endsection
@stop