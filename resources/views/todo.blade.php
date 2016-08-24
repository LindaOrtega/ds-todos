@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
    </div>



    <!-- Display Todo name and description -->
        <div class="panel panel-default">
            <div class="panel-body">
    		<a href="{{url('todo')}}">Back to All Todos</a>
		@if ((!empty($todo->name)) && !empty($todo->description))
			<table class="table table-striped todo-table">
			    <thead>
				<th>Todo Name</th>
				<th>Todo Description</th>
			    </thead>	    
			    <tr>
				<!-- todo Name -->
				<td class="table-text">
				    <div>{{ $todo->name }}</div>
				</td>
				<td class="table-text">
				    <div>{{ $todo->description }}</div>
				</td>
			    </tr>
			</table>
           	@endif 
            </div>
        </div>
@endsection
