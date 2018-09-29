
<hr style="width:100%" />
<div style="background-color:#f0f0f0;">
    
<br />
<br />

<div class="form-group {{ $errors->has('health_institution_name') ? 'has-error' : ''}}">
    {!! Form::label('program_type', 'Program Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        
        {!! Form::select('program_type', array(
            'Residency Training' ,
            'Preliminary Training' ,
        )) !!}
        {!! $errors->first('program_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Issuing Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    {!! Form::label('year', 'Number of Years', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::selectRange('number', 1, 20)!!}
        {!! $errors->first('degree_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Attachments', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6"><input id="input-file-now-custom-2" class="dropify" data-height="500" type="file">
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
   </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Add New Degree', ['class' => 'btn btn-primary']) !!}
        <br><br></h5>
    </div> 
</div>
</div>

