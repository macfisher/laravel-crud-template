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

<h1>Create an NPC</h1>

<!-- If there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
{{ Form::open(array('url' => 'npcs')) }}

<!-- NAME -->
<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', Input::old('name'), array('class'=>'form-control')) }}
</div>

<!-- ENERGY -->
<!-- Input::old keeps the old data in the input field if error is thrown -->
<div class="form-group">
	{{ Form::label('energy', 'Energy') }}
	{{Form::number('energy',Input::old('energy'),array('class'=>'form-control'))}}
</div>

<!-- ATTACK -->
<div class="form-group">
	{{ Form::label('attack', 'Attack') }}
	{{Form::number('attack',Input::old('attack'),array('class'=>'form-control'))}}
</div>

<!-- HP -->
<div class="form-group">
	{{ Form::label('hp', 'HP') }}
	{{Form::number('hp',Input::old('hp'),array('class'=>'form-control'))}}
</div>

<!-- DESCRIPTION -->
<div class="form-group">
	{{ Form::label('description', 'Description') }}
	{{Form::text('description',Input::old('description'),array('class'=>'form-control'))}}
</div>

<!-- STATUS -->
<!--<div class="form-group">
	{{ Form::label('npc_status', 'NPC Status') }}
	
	{{
		Form::select(
			'npc_status',
				 array(
					'0' => 'Select a Status',
					'1' => 'Untouched', 
					'2' => 'Minor Injuries',
					'3' => 'Injured',
					'4' => 'Critical'
				 ),
				 Input::old('npc_status'),
				 array(
					'class'=>'form-control'
				 )
		) 
	}}
	
</div>-->

	{{ Form::submit('Create the NPC', array('class'=>'btn btn-primary')) }}
{{ Form::close() }}

</div>
</body>		  
</head>
</html>


