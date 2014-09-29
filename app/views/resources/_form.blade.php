<!-- ID Number Form Input -->
<div class="form-group">
    {{ Form::label('id_number', 'ID Number:') }}
    {{ Form::text('id_number', null, ['class' => 'form-control required']) }}
</div>

<!-- First Name Form Input -->
<div class="form-group">
    {{ Form::label('first_name', 'First Name:') }}
    {{ Form::text('first_name', null, ['class' => 'form-control']) }}
</div>

<!-- Last Name Form Input -->
<div class="form-group">
    {{ Form::label('last_name', 'Last Name:') }}
    {{ Form::text('last_name', null, ['class' => 'form-control']) }}
</div>

<!-- Extension Form Input -->
<div class="form-group">
    {{ Form::label('extension_num', 'Extension:') }}
    {{ Form::text('extension_num', null, ['class' => 'form-control']) }}
</div>

<!-- Pin Number Form Input -->
<div class="form-group">
    {{ Form::label('extension_pin', 'Pin Number:') }}
    {{ Form::text('extension_pin', null, ['class' => 'form-control']) }}
</div>

<!-- Primary Phone Form Input -->
<div class="form-group">
    {{ Form::label('primary_phone', 'Primary Phone:') }}
    {{ Form::text('primary_phone', null, ['class' => 'form-control required']) }}
</div>

<!-- Secondary Phone Form Input -->
<div class="form-group">
    {{ Form::label('secondary_phone', 'Secondary Phone:') }}
    {{ Form::text('secondary_phone', null, ['class' => 'form-control']) }}
</div>

<!-- Active Checkbox Form Input -->
<div class="form-group">
    {{ Form::label('active', 'Active:') }}
    {{ Form::check('active', 1,  false) }}
</div>

<!-- Time Zone Selector Input -->
<div class="form-group">
    {{ Form::label('time_zone', 'Time Zone:') }}
    {{ Form::select_json('time_zone', 'timezones', null, ['class' => 'form-control']) }}
</div>

<!-- Submit Button -->
<div class="form-group">
    {{ Form::submit('Save Resource', ['class' => 'btn btn-primary']) }}
</div>
