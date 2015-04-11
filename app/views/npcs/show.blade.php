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

<h1>Showing {{ $npc->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $npc->name }}</h2>
		<p>
			<strong>Energy: </strong>{{ $npc->energy }}<br>
			<strong>Attack: </strong>{{ $npc->attack }}<br>
			<strong>HP: </strong>{{ $npc->hp }}<br>
			<br>{{ $npc->description }}
		</p>
	</div>
