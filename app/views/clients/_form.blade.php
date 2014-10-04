{{ Form::textField('first_name', 'First Name:') }}
{{ Form::textField('last_name', 'Last Name:') }}
{{ Form::textField('phone', 'Phone Number:') }}
{{ Form::textField('phone_ext', 'Phone Ext:') }}
{{ Form::textField('fax', 'Fax:') }}
{{ Form::selectJSONField('time_zone', 'Select Time Zone:', 'timezones') }}
{{ Form::submitButton('Save Client') }}