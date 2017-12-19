@extends('layouts.master')

@section('content')
<h3>CRUD</h3>
@if(Session::has('success_customer_added'))
     <div class="alert alert-success">
     	{{ Session::get('success_customer_added')}}
     </div>
@endif
@if(Session::has('success_blog_update'))
     <div class="alert alert-success">
     	{{ Session::get('success_blog_update')}}
     </div>
@endif

@if(Session::has('customer_deleted'))
    <div class="alert alert-success">
        {{ Session::get('customer_deleted')}}
    </div>
@endif
<table class="table table-striped">
	<tr>
		<td colspan="4">
		     <a href="/customer/create">
                <h1 class="pull-right">
                    <button class="btn btn-primary">Create</button>
                </h1>
            </a>
	    </td>
    </tr>
	<tr>
		<th style="width:15%;">Name</th>
		<th style="width:15%;">Phone</th>
		<th style="width:15%;">Edit</th>
		<th style="width:15%;">Delete</th>
		
	</tr>
	@foreach($customers->all() as $customer)
	<tr>
		<td>{{ $customer->name }}</td>
		<td>{{ $customer->phone }}</td>
		<td>

            <a href="{{ route('customer.edit', ['id'=>$customer->id]) }}" data-toggle="tooltip" title="Edit Team">
            	<div class="glyphicon glyphicon-pencil">
            	</div>
            </a> 
        </td>
        <td>
            <form action="{{ route('customer.destroy', ['id' => $customer->id]) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="Delete"><!--- to Delete -->
           
            <button type="submit" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>
        </button>
        </form>
            
        </td>

	</tr>
	@endforeach
	
</table>




@stop