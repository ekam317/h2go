{{-- 

<div style="background-color:#f0f0f0;">
<br>
<br>
<div class="form-group {{ $errors->has('health_institution_name') ? 'has-error' : ''}}">
    {!! Form::label('health_institution_name', 'Name Your Title Program', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('health_institution_name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('health_institution_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Issuing Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Upload Your Supported Documents', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Add New Board ', ['class' => 'btn btn-primary']) !!}
        <br/><br/>
        
    </div>
</div>
</div> --}}
