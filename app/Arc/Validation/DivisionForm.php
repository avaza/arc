<?php namespace Arc\Validation;

use Laracasts\Validation\FormValidator;

class DivisionForm extends FormValidator{

    /**
     * Validation rules for Resource Form
     */
    protected $rules = [
        'client_id' => 'required|exists:clients',
        'agency_id' => 'required|exists:agencies',
        'name' => 'required',
        'access_code' => 'required|unique:divisions',
        'street_1' => 'required',
        'city' => 'required',
        'state' =>'required|alpha|size:2',
        'zip' => 'required|digits:5'
    ];

    public function withRulesForUpdate($id = null)
    {
        $this->rules['access_code'] = "required|unique:divisions,access_code,{$id}";
        return $this;
    }
}