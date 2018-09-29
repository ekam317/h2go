
<hr style="width:100%" />
<div style="background-color:#f0f0f0;">
    
<br />
<br />

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Name Your Program Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('degree_name') ? 'has-error' : ''}}">
    {!! Form::label('degree_name', 'Issuing Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('degree_name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('degree_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Upload Your Supported Document', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6"><input id="input-file-now-custom-2" class="dropify" data-height="500" type="file">
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
   </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Add New Board', ['class' => 'btn btn-primary']) !!}
        <br><br></h5>
    </div> 
</div>
</div>

