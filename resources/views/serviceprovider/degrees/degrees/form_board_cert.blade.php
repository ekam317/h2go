{!! Form::open(['url' => '/serviceprovider/degrees', 'class' => 'form-horizontal', 'files' => true]) !!}


<div> <h5><strong>Saudi Medical Board</strong> <img src="https://png.icons8.com/cotton/30/000000/test-partial-passed.png"> </h5></div>
<div class="form-group {{ $errors->has('health_institution_name') ? 'has-error' : ''}}">
    {!! Form::label('health_institution_name', 'Program Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('health_institution_name', $degree->health_institution_name, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('health_institution_name', '<p class="help-block">:message</p>') !!}
    </div>
   </div>
   <div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Attachments', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6"><input id="input-file-now-custom-2" class="dropify" data-height="500" type="file">
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
   </div>
</div>

<div> <h5><strong>American Medical Board</strong> <img src="https://png.icons8.com/cotton/30/000000/test-partial-passed.png"></h5></div>
<div class="form-group {{ $errors->has('health_institution_name') ? 'has-error' : ''}}">
    {!! Form::label('health_institution_name', 'Program Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('health_institution_name', $degree->health_institution_name, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('health_institution_name', '<p class="help-block">:message</p>') !!}
    </div>
   </div>
   <div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Attachments', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6"><input id="input-file-now-custom-2" class="dropify" data-height="500" type="file">
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
   </div>
</div>
{!! Form::close() !!}	
