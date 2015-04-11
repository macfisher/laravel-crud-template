<?php

class NpcController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get all NPC
		$npcs = Npc::all();
		
		// Load the view and pass the NPC
		return View::make('npcs.index')->with('npcs', $npcs);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Load the create form (app/views/npcs/create.blade.php)
		return View::make('npcs.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validate
		$rules = array(
			'name' => 'required',
			'energy' => 'required',
			'attack' => 'required',
			'hp' => 'required',
			'description' => 'required'
		);
		
		$validator = Validator::make(Input::all(), $rules);
		
		//process login
		if ($validator->fails()) {
			return Redirect::to('npcs/create')->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			//store
			$npc = new Npc;
			
			$npc->name        = Input::get('name');
			$npc->energy      = Input::get('energy');
			$npc->attack      = Input::get('attack');
			$npc->hp          = Input::get('hp');
			$npc->description = Input::get('description');
			//$npc->status      = Input::get('status');
			
			$npc->save();
			
			//redirect
			Session::flash('message', 'Successfully created NPC!');
			return Redirect::to('npcs');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//get the npc
		$npc = Npc::find($id);
		
		//show the view and pass the npc to it
		return View::make('npcs.show')->with('npc', $npc);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
