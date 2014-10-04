{{ Form::textField('id_number', 'ID Number:') }}
{{ Form::textField('first_name', 'First Name:') }}
{{ Form::textField('last_name', 'Last Name:') }}
{{ Form::textField('extension_num', 'Extension:') }}
{{ Form::textField('extension_pin', 'Pin Number:') }}
{{ Form::textField('primary_phone', 'Primary Phone:') }}
{{ Form::textField('secondary_phone', 'Secondary Phone:') }}
{{ Form::checkboxField('active', 'Active:') }}
{{ Form::selectJSONField('time_zone', 'Select Time Zone:', 'timezones') }}
{{ Form::submitButton('Save Staff Member') }}
