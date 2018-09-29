
<hr style="width:100%" />
<div style="background-color:#f0f0f0;">
    
<br />
<br />

<div class="form-group {{ $errors->has('health_institution_name') ? 'has-error' : ''}}">
    {!! Form::label('health_institution_name', 'Category', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('health_institution_name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('health_institution_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Specialties', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Sub-Specialties', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('degree_name') ? 'has-error' : ''}}">
    {!! Form::label('degree_name', 'Service Request You Might be Interest In', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('degree_name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('degree_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Add New', ['class' => 'btn btn-primary']) !!}
        <br><br></h5>
    </div> 
</div>
</div>

