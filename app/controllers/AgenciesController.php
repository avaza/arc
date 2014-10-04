<?php

use Arc\Validation\AgencyForm;
use Arc\Agencies\Agency;
use Laracasts\Commander\CommandBus;

class AgenciesController extends \BaseController {

    private $fields = ['active', 'client_id', 'agency_id', 'name', 'access_code', 'street_1', 'street_2', 'building', 'suite', 'city', 'county', 'state', 'zip'];
    private $agencyForm;
    private $commandBus;
    function __construct(CommandBus $commandBus, AgencyForm $agencyForm)
    {
        $this->agencyForm = $agencyForm;
    }

    /**
     * Display a listing of the agency.
     * GET /agencies
     *
     * @return Response
     */
    public function index()
    {
        $agencies = Agency::all();
        return View::make('agencies.index', compact('agencies'));
    }

    /**
     * Show the form for creating a new agency.
     * GET /agencies/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('agencies.create');
    }

    /**
     * Store a newly created agency in storage.
     * POST /agencies
     *
     * @return Response
     */
    public function store()
    {
        $this->agencyForm->validate(Input::all());
        Agency::create(
            Input::only($this->fields)
        );
        return Redirect::to('agencies');
    }

    /**
     * Display the specified agency.
     * GET /agencies/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $agency = Agency::find($id);
        return View::make('agencies.show', compact('agency'));
    }

    /**
     * Show the form for editing the specified agency.
     * GET /agencies/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $agency = Agency::find($id);
        return View::make('agencies.edit', compact('agency'));
    }

    /**
     * Update the specified agency in storage.
     * PUT /agencies/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $this->agencyForm->withRulesForUpdate($id)->validate(Input::all());
        $agency = Agency::find($id);
        foreach($this->fields as $field){
            $agency->$field = Input::get($field);
        }
        $agency->save();
        return Redirect::to('agencies');
    }

    /**
     * Remove the specified agency from storage.
     * DELETE /agencies/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}