{{ Form::selectDBField('client_id','Client Contact', 'Client', ['first_name', 'last_name']) }}
{{ Form::selectDBField('agency_id', 'Division\'s Agency', 'Agency') }}
{{ Form::textField('name', 'Division Name:') }}
{{ Form::textField('access_code', 'Access Code:') }}
{{ Form::addressFields() }}
{{ Form::submitButton('Save Division') }}