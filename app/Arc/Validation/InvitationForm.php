<?php namespace Arc\Validation;

use Laracasts\Validation\FormValidator;

class InvitationForm extends FormValidator {

    /**
     * Validation rules for Invitation
     */
    public $rules = [
        'email' => 'required|email'
    ];

}