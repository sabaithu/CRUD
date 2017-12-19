@extends('layouts.master')

@section('content')
<h1>Show the Customers List</h1>
<table class="table responsive">
	<tr>
		<td colspan="4">
		     <h1 class="pull-right">Show</h1>
	    </td>
    </tr>
    
    @foreach($customers as $customer)
	<tr>
		<td>{{ $customer->name }}</td>
		<td>{{ $customer->phone }}</td>
	</tr>
	@endforeach
	
</table>

@stop