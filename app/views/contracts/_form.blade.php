<!-- Client  Contact Select Input -->
<div class="form-group">
    {{ Form::label('client_id', 'Client Contact:') }}
    {{ Form::select_db('client_id','Client', ['first_name', 'last_name'], null, ['class' => 'chosen-select'], 'Client Contact') }}
</div>

<!-- Account Number Form Input -->
<div class="form-group">
    {{ Form::label('account_number', 'Account Number:') }}
    {{ Form::text('account_number', null, ['class' => 'form-control']) }}
</div>

<!-- Contract Name Form Input -->
<div class="form-group">
    {{ Form::label('name', 'Contract Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<!-- Current Purchase Order Number Form Input -->
<div class="form-group">
    {{ Form::label('current_po_number', 'Current Purchase Order Number:') }}
    {{ Form::text('current_po_number', null, ['class' => 'form-control']) }}
</div>

<!-- Contract Start Date Form Input -->
<div class="form-group">
    {{ Form::label('start_date', 'Contract Start Date:') }}
    {{ Form::date('start_date', null, ['class' => 'form-control']) }}
</div>

<!-- Contract End Date Form Input -->
<div class="form-group">
    {{ Form::label('end_date', 'Contract End Date:') }}
    {{ Form::date('end_date', null, ['class' => 'form-control']) }}
</div>

<!-- After Hours Start Time Form Input -->
<div class="form-group">
    {{ Form::label('ah_start', 'After Hours Start Time:') }}
    {{ Form::text('ah_start', null, ['class' => 'form-control']) }}
</div>

<!-- After Hours End Time Form Input -->
<div class="form-group">
    {{ Form::label('ah_end', 'After Hours End Time:') }}
    {{ Form::text('ah_end', null, ['class' => 'form-control']) }}
</div>

<!-- Weekends are "After Hours" Form Input -->
<div class="form-group">
    {{ Form::label('ah_weekends', 'Weekends are "After Hours":') }}
    {{ Form::check('ah_weekends', null, ['class' => 'form-control']) }}
</div>

<!-- OPI User Checkbox Input -->
<div class="form-group">
    {{ Form::label('otp_user', 'OPI User:') }}
    {{ Form::check('otp_user', 1,  true) }}
</div>

<!-- On-Site User Checkbox Input -->
<div class="form-group">
    {{ Form::label('ons_user', 'On-Site User:') }}
    {{ Form::check('ons_user', 1,  false) }}
</div>

<!-- VRI User Checkbox Input -->
<div class="form-group">
    {{ Form::label('vri_user', 'VRI User:') }}
    {{ Form::check('vri_user', 1,  false) }}
</div>

<!-- Translation User Checkbox Input -->
<div class="form-group">
    {{ Form::label('tsl_user', 'Translation User:') }}
    {{ Form::check('tsl_user', 1,  false) }}
</div>

<!-- Submit Button -->
<div class="form-group">
    {{ Form::submit('Save Contract', ['class' => 'btn btn-primary']) }}
</div>


