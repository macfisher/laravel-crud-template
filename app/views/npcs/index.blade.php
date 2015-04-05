<!DOCTYPE html>
<html>
<head>
	<title>Robot Sneaker</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>

<div class="container">
<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('npcs') }}">Robot Sneaker NPCs</a>
	</div>
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('npcs') }}">View All NPCs</a></li>
		<li><a href="{{ URL::to('npcs/create') }}">Create an NPC</a></li>
	</ul>	
</nav>

<h1>All the Nerds</h1>

<!-- Will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Nerd Level</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	
		@foreach ($nerds as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->name }}</td>
				<td>{{ $value->email }}</td>
				<td>{{ $value->nerd_level }}</td>
				
				<!-- Also add 'show', 'edit', and 'delete' buttons -->
				<td>
					<!-- Delete nerd (uses destroy method DESTROY /nerds{id} -->
					<!-- add this later because it is more complicated -->
					{{ Form::open(array('url'=>'nerds/'.$value->id, 'class'=>'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Nerd', array('class'=>'btn btn-warning')) }}
					{{ Form::close() }}
					
					<!-- Show the nerds (uses show method found at
						 GET /nerds/{id} -->
					<a class="btn btn-small btn-success"
				       href="{{ 
				           URL::to('nerds/'.$value->id)
				       }}">Show This Nerd</a>
				   
				   <!-- Edit this nerd (uses the edit method found
				        at GET /nerds/{id}/edit -->
					<a class="btn btn-small btn-success" 
				       href="{{ 
				           URL::to('nerds/'.$value->id.'/edit')
				       }}">Edit this Nerd</a>
		    
		    	</td>
			</tr>
		@endforeach
		
	</tbody>
</table>	

</div><!-- End Container -->

</body>
</html>
