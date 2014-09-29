<?php namespace Arc\Validation;

use Laracasts\Validation\FormValidator;

class ResourceForm extends FormValidator
{

    /**
     * Validation rules for Resource Form
     */
    public $rules = [
        'id_number' => 'unique:resources|required|digits:4',
        'first_name' => 'required|alpha|between:2,100',
        'last_name' => 'required|alpha|between:2,100',
        'time_zone' => 'in:America/New_York,America/Chicago,America/Denver,America/Phoenix,America/Los_Angeles,America/Anchorage,America/Adak,Pacific/Honolulu',
        'extension_num' => 'required_with:extension_pin|digits:4',
        'extension_pin' => 'required_with:extension_num|digits:4',
        'primary_phone' => 'required|digits:10',
        'secondary_phone' => 'digits:10',
        'active' => 'required'
    ];

    public function withRulesForUpdate($id = null)
    {
        $this->rules['id_number'] = "required|digits:4|unique:resources,id_number,{$id}";
        return $this;
    }
}