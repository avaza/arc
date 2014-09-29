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

<!-- Phone Number Form Input -->
<div class="form-group">
    {{ Form::label('phone', 'Phone Number:') }}
    {{ Form::text('phone', null, ['class' => 'form-control']) }}
</div>

<!-- Phone Ext Form Input -->
<div class="form-group">
    {{ Form::label('phone_ext', 'Phone Ext:') }}
    {{ Form::text('phone_ext', null, ['class' => 'form-control']) }}
</div>

<!-- Fax Form Input -->
<div class="form-group">
    {{ Form::label('fax', 'Fax:') }}
    {{ Form::text('fax', null, ['class' => 'form-control required']) }}
</div>

<!-- Time Zone Selector Input -->
<div class="form-group">
    {{ Form::label('time_zone', 'Time Zone:') }}
    {{ Form::select_json('time_zone', 'timezones', null, ['class' => 'form-control']) }}
</div>

<!-- Submit Button -->
<div class="form-group">
    {{ Form::submit('Save Client', ['class' => 'btn btn-primary']) }}
</div>