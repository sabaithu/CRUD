@extends('layouts.master')

@section('content')
<form action="{{ route('customer.update', ['id' => $customer->id] )}}"  method="post">
 	<input type="hidden" name="_method" value="PUT">
 	{{ csrf_field() }}
<table  width="400">
	<tr>
		<td colspan="4">
		     <h1 class="pull-right">Edit Customer Data</h1>
	    </td>
    </tr>
	<tr>
		<td>	
			<lavel for="name" class="control-label">Name</lavel>

 		</td>
 		<td>
 			<input type="text" name="name" class="form-control" value="{{ $customer->name }}"><br>
 		</td>
 		<br>
	</tr>
	
	<tr>
		<td>
			<lavel for="phone" class="control-label">Phone</lavel>
		</td>
		<td>
 		    <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}"><br>
		</td>
		
	</tr>
	<tr>
		<td></td>
		<td>
			
			<button type="submit" class="btn btn-primary">Edit Data</button></td>
	</tr>

</table>
@endsection
