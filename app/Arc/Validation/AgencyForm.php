<?php namespace Arc\Validation;

use Laracasts\Validation\FormValidator;

class AgencyForm extends FormValidator{

    /**
     * Validation rules for Resource Form
     */
    protected $rules = [
        'client_id' => 'required|exists:clients',
        'contract_id' => 'required|exists:contracts',
        'name' => 'required',
        'clientid' => 'required|unique:agencies|numeric',
        'street_1' => 'required',
        'city' => 'required',
        'state' =>'required|alpha|size:2',
        'zip' => 'required|digits:5'
    ];

    public function withRulesForUpdate($id = null)
    {
        $this->rules['clientid'] = "required|numeric|unique:agencies,clientid,{$id}";
        return $this;
    }
}



