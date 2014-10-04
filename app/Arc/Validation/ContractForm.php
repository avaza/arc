<?php namespace Arc\Validation;

use Laracasts\Validation\FormValidator;

class ContractForm extends FormValidator{

    /**
     * Validation rules for Resource Form
     * @var array
     */
    protected $rules = [
        'client_id' => 'required|exists:clients',
        'contract_id' => 'required|exists:contracts',
        'name' => 'required',
        'account_number' => 'required|unique:contracts|numeric',
        'contract_number' =>'required',
        'start_date' => 'required|date_format:Y-m-d H:i:s',
        'end_date' => 'required|date_format:Y-m-d H:i:s',
        'ah_start' => 'required|date_format:H:i:s',
        'ah_end' => 'required|date_format:H:i:s',
        'otp_ahup' => 'required|regex:/[\d]{1,2}.[\d]{2}/',
        'otp_cout' => 'required|regex:/[\d]{1,2}.[\d]{2}/',
        'ons_ahup' => 'required|numeric|integer',
        'ons_rush' => 'required|numeric|integer',
        'ons_cncl' => 'required|numeric|integer',
        'vri_ahup' => 'required|regex:/[\d]{1,2}.[\d]{2}/',
        'vri_odup' => 'required|regex:/[\d]{1,2}.[\d]{2}/',
        'vri_cncl' => 'required|regex:/[\d]{1,2}.[\d]{2}/',
        'tsl_rush' => 'required|numeric|integer',
        'tsl_form' => 'required|numeric|integer',
        'tsl_cncl' => 'required|numeric|integer'
    ];

    /**
     * Fields for the form
     * @var array
     */
    public $fields = [
        'active',
        'client_id',
        'name',
        'account_number',
        'contract_number',
        'current_po_number',
        'expired_po_number_json',
        'start_date',
        'end_date',
        'ah_start',
        'ah_end',
        'ah_weekends',
        'otp_user',
        'ons_user',
        'vri_user',
        'tsl_user'
    ];

    /**
     * Default field values
     * @var array
     */
    public $defaults = [
        'ah_start' =>'20:00:00',
        'ah_end' => '08:00:00',
        'otp_user' => 1,
        'ons_user' => 0,
        'vri_user' => 0,
        'tsl_user' => 0
    ];

    /**
     * Validation rules on Update
     * @param null $id
     * @return $this
     */
    public function withRulesForUpdate($id = null)
    {
        $this->rules['account_number'] = "required|numeric|unique:contracts,account_number,{$id}";
        return $this;
    }
}




