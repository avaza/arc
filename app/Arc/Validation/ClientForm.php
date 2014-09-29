<?php namespace Arc\Validation;

use Laracasts\Validation\FormValidator;

class ClientForm extends FormValidator{

    /**
     * Validation rules for Resource Form
     */
    protected $rules = [
        'phone'       => 'required|digits:10',
        'phone_ext'   => 'digits_between:3,6',
        'fax'   => 'digits:10'
    ];

    public function withRulesForUpdate($id = null)
    {
        //$this->rules['field'] = 'new rules here';
        return $this;
    }
}