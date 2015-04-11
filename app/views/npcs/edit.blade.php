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

<h1>Edit {{ $npc->name }}</h1>

<!--if there are creation errors, they will show here-->
{{ HTML::ul($errors->all()) }}

{{ Form::model($npc, array('route'=>array('npcs.update',$npc->id),'method'=>'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class'=>'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('energy', 'Energy') }}
		{{ Form::text('energy', null, array('class'=>'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('attack', 'Attack') }}
		{{ Form::text('attack', null, array('class'=>'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('hp', 'HP') }}
		{{ Form::text('hp', null, array('class'=>'form-control')) }}
	</div>
	
	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', null, array('class'=>'form-control')) }}
	</div>

	{{ Form::submit('Edit the NPC',array('class'=>'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
