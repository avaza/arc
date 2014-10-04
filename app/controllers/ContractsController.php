<?php

use Arc\Core\CommandBus;
use Arc\Contracts\Contract;
use Arc\Validation\ContractForm;
use Arc\Contracts\CreateContractCommand;

class ContractsController extends BaseController {

    use CommandBus;
    private $contractForm;

    function __construct(ContractForm $contractForm)
    {
        $this->contractForm = $contractForm;
    }

    /**
     * Display a listing of the contract.
     * GET /contracts
     *
     * @return Response
     */
    public function index()
    {
        $contracts = Contract::all();

        return View::make('contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new contract.
     * GET /contracts/create
     *
     * @return Response
     */
    public function create()
    {
        $contract = new Contract;
        foreach ($this->contractForm->defaults as $field => $default)
        {
            $contract->$field = $default;
        }

        return View::make('contracts.create', compact('contract'));
    }

    /**
     * Place a newly created contract in storage.
     * POST /contracts
     *
     * @return Response
     */
    public function store()
    {
        $this->contractForm->validate(Input::all());

        $this->execute(
            new CreateContractCommand(Input::only($this->contractForm->fields))
        );

        return Redirect::to('contracts');
    }

    /**
     * Display the specified contract.
     * GET /contracts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $contract = Contract::find($id);

        return View::make('contracts.show', compact('contract'));
    }

    /**
     * Show the form for editing the specified contract.
     * GET /contracts/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $contract = Contract::find($id);

        return View::make('contracts.edit', compact('contract'));
    }

    /**
     * Update the specified contract in storage.
     * PUT /contracts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $this->contractForm->withRulesForUpdate($id)->validate(Input::all());
        $contract = Contract::find($id);
        foreach ($this->contractForm->fields as $field)
        {
            $contract->$field = Input::get($field);
        }
        $contract->save();

        return Redirect::to('contracts');
    }

    /**
     * Remove the specified contract from storage.
     * DELETE /contracts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}