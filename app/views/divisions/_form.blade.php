<!-- Client  Representative Form Input -->
<div class="form-group">
    {{ Form::label('client_id', 'Client Representative:') }}
    {{ Form::select_db('client_id','Client', ['first_name', 'last_name'], null, ['class' => 'chosen-select']) }}
</div>

<!-- Agency Form Input -->
<div class="form-group">
    {{ Form::label('agency_id', 'Agency:') }}
    {{ Form::select_db('agency_id', 'Agency', null, null, ['class' => 'chosen-select']) }}
</div>

<!-- Division Name Form Input -->
<div class="form-group">
    {{ Form::label('name', 'Division Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<!-- Access Code Form Input -->
<div class="form-group">
    {{ Form::label('access_code', 'Access Code:') }}
    {{ Form::text('access_code', null, ['class' => 'form-control']) }}
</div>

<!-- Street 1 Form Input -->
<div class="form-group">
    {{ Form::label('street_1', 'Street 1:') }}
    {{ Form::text('street_1', null, ['class' => 'form-control']) }}
</div>

<!-- Street 2 Form Input -->
<div class="form-group">
    {{ Form::label('street_2', 'Street 2:') }}
    {{ Form::text('street_2', null, ['class' => 'form-control']) }}
</div>

<!-- Building Name Form Input -->
<div class="form-group">
    {{ Form::label('building', 'Building Name:') }}
    {{ Form::text('building', null, ['class' => 'form-control']) }}
</div>

<!-- Suite Form Input -->
<div class="form-group">
    {{ Form::label('suite', 'Suite:') }}
    {{ Form::text('suite', null, ['class' => 'form-control']) }}
</div>

<!-- City Form Input -->
<div class="form-group">
    {{ Form::label('city', 'City:') }}
    {{ Form::text('city', null, ['class' => 'form-control']) }}
</div>

<!-- State Form Select Input -->
<div class="form-group">
    {{ Form::label('state', 'State:') }}
    {{ Form::select_json('state', 'states', null, ['class' => 'form-control']) }}
</div>

<!-- County Form Input -->
<div class="form-group">
    {{ Form::label('county', 'County:') }}
    {{ Form::text('county', null, ['class' => 'form-control']) }}
</div>

<!-- Zip Code Form Input -->
<div class="form-group">
    {{ Form::label('zip', 'Zip Code:') }}
    {{ Form::text('zip', null, ['class' => 'form-control']) }}
</div>

<!-- Submit Button -->
<div class="form-group">
    {{ Form::submit('Save Division', ['class' => 'btn btn-primary']) }}
</div>