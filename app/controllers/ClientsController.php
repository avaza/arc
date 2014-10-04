<?php

use Arc\Validation\clientForm;
use Arc\Clients\Client;
use Laracasts\Commander\CommandBus;

class ClientsController extends \BaseController {

    private $clientForm;
    private $commandBus;
    function __construct(CommandBus $commandBus, clientForm $clientForm)
    {
        $this->clientForm = $clientForm;
        $this->commandBus = $commandBus;
    }
    /**
     * Display a listing of the client.
     * GET /clients
     *
     * @return Response
     */
    public function index()
    {
        $clients = Client::all();
        return View::make('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new client.
     * GET /clients/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('clients.create');
    }

    /**
     * Store a newly created client in storage.
     * POST /clients
     *
     * @return Response
     */
    public function store()
    {
        $command = new createContractCommand;
        $this->commandBus->execute($command);
        $this->clientForm->validate(Input::all());
        $client = Client::create(
            Input::only('first_name', 'last_name', 'time_zone', 'phone', 'phone_ext', 'fax')
        );
        return Redirect::to('clients');
    }

    /**
     * Display the specified client.
     * GET /clients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return View::make('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified client.
     * GET /clients/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return View::make('clients.edit', compact('client'));
    }

    /**
     * Update the specified client in storage.
     * PUT /clients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $this->clientForm->withRulesForUpdate($id)->validate(Input::all());
        $client = Client::find($id);
        $client->first_name = Input::get('first_name');
        $client->last_name = Input::get('last_name');
        $client->time_zone = Input::get('time_zone');
        $client->phone = Input::get('phone');
        $client->phone_ext = Input::get('phone_ext');
        $client->fax = Input::get('fax');
        $client->save();
        return Redirect::to('clients');
    }

    /**
     * Remove the specified client from storage.
     * DELETE /clients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}