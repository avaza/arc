{{ Form::selectDBField('client_id','Client Contact', 'Client', ['first_name', 'last_name']) }}
{{ Form::selectDBField('contract_id', 'Contract', 'Contract') }}
{{ Form::textField('name', 'Agency Name:') }}
{{ Form::textField('clientid', 'Invoice Code:') }}
{{ Form::textField('bill_to', 'Address To:') }}
{{ Form::addressFields() }}
{{ Form::submitButton('Save Agency') }}