<?php

use Arc\Validation\DivisionForm;
use Laracasts\Commander\CommandBus;
class DivisionsController extends \BaseController {

    private $fields = ['active', 'client_id', 'agency_id', 'name', 'access_code', 'street_1', 'street_2', 'building', 'suite', 'city', 'county', 'state', 'zip'];
    private $divisionForm;
    private $commandBus;
    function __construct(CommandBus $commandBus, DivisionForm $divisionForm)
    {
        $this->divisionForm = $divisionForm;
    }

    /**
     * Display a listing of the division.
     * GET /divisions
     *
     * @return Response
     */
    public function index()
    {
        $divisions = Division::all();
        return View::make('divisions.index', compact('divisions'));
    }

    /**
     * Show the form for creating a new division.
     * GET /divisions/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('divisions.create');
    }

    /**
     * Store a newly created division in storage.
     * POST /divisions
     *
     * @return Response
     */
    public function store()
    {
        $this->divisionForm->validate(Input::all());
        Division::create(
            Input::only($this->fields)
        );
        return Redirect::to('divisions');
    }

    /**
     * Display the specified division.
     * GET /divisions/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $division = Division::find($id);
        return View::make('divisions.show', compact('division'));
    }

    /**
     * Show the form for editing the specified division.
     * GET /divisions/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $division = Division::find($id);
        return View::make('divisions.edit', compact('division'));
    }

    /**
     * Update the specified division in storage.
     * PUT /divisions/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $this->divisionForm->withRulesForUpdate($id)->validate(Input::all());
        $division = Division::find($id);
        foreach($this->fields as $field){
            $division->$field = Input::get($field);
        }
        $division->save();
        return Redirect::to('divisions');
    }

    /**
     * Remove the specified division from storage.
     * DELETE /divisions/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}