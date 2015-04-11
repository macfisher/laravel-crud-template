<!DOCTYPE html>
<html>
<head>
	<title>Robot Sneaker NPCs</title>
	
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

<h1>All NPCs</h1>

<!-- Will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<!--<td>ID</td>-->
			<td>Name</td>
			<td>Energy</td>
			<td>Attack</td>
			<td>HP</td>
			<!--<td>Description</td>-->
			<td>Action</td>
			<!--<td>Status</td>-->
		</tr>
	</thead>
	<tbody>
	
		@foreach ($npcs as $key => $value)
			<tr>
				<!--<td>{{ $value->id }}</td>-->
				<td>{{ $value->name }}</td>
				<td>{{ $value->energy }}</td>
				<td>{{ $value->attack }}</td>
				<td>{{ $value->hp }}</td>
				<!--<td>{{ $value->description }}</td>-->
				<!--<td>{{ $value->status }}</td>-->
				
				<!-- Also add 'show', 'edit', and 'delete' buttons -->
				<td>
					<!-- Delete npc (uses destroy method DESTROY /npcs{id} -->
					{{ Form::open(array('url'=>'npcs/'.$value->id, 'class'=>'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class'=>'btn btn-warning')) }}
					{{ Form::close() }}
					
					<!-- Show the npcs (uses show method found at GET /npcs/{id} -->
					<a class="btn btn-small btn-success" href="{{URL::to('npcs/'.$value->id)}}">View</a>
				   
				   <!-- Edit this npc (uses the edit method found at GET /npcs/{id}/edit -->
					<a class="btn btn-small btn-success" href="{{URL::to('npcs/'.$value->id.'/edit')}}">Edit</a>
		    
		    	</td>
			</tr>
		@endforeach
		
	</tbody>
</table>	

</div><!-- End Container -->

</body>
</html>
