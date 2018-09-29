{!! Form::open(['url' => '/serviceprovider/degrees', 'class' => 'form-horizontal', 'files' => true]) !!}


<div> <h5><strong>Diploma in Medical Education</strong> <img src="https://png.icons8.com/cotton/30/000000/doctors-bag.png"></h5></div>
<div class="form-group {{ $errors->has('health_institution_name') ? 'has-error' : ''}}">
    {!! Form::label('health_institution_name', 'Health Institution Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('health_institution_name', $degree->health_institution_name, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('health_institution_name', '<p class="help-block">:message</p>') !!}
    </div>
   </div>
<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Issuing Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', $degree->issuing_country, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Attachments', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <a href="../storage/{{$degree->path}}">{{$degree->attachements}}</a>
        <input id="input-file-now-custom-2" class="dropify" data-height="500" type="file">
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
   </div>
</div>

<div> <h5><strong>Bachelor in Medical Education</strong> <img src="https://png.icons8.com/cotton/30/000000/doctors-bag.png"></h5></div>
<div class="form-group {{ $errors->has('health_institution_name') ? 'has-error' : ''}}">
    {!! Form::label('health_institution_name', 'Health Institution Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('health_institution_name', $degree->health_institution_name, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('health_institution_name', '<p class="help-block">:message</p>') !!}
    </div>
   </div>
<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Issuing Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', $degree->issuing_country, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Attachments', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <a href="../storage/{{$degree->path}}">{{$degree->attachements}}</a>
        <input id="input-file-now-custom-2" class="dropify" data-height="500" type="file">
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
   </div>
</div>

<div> <h5><strong>Master in Medical Education</strong> <img src="https://png.icons8.com/cotton/30/000000/doctors-bag.png"></h5></div>
<div class="form-group {{ $errors->has('health_institution_name') ? 'has-error' : ''}}">
    {!! Form::label('health_institution_name', 'Health Institution Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('health_institution_name', $degree->health_institution_name, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('health_institution_name', '<p class="help-block">:message</p>') !!}
    </div>
   </div>
<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Issuing Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', $degree->issuing_country, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Attachments', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
         <a href="/storage/{{$degree->path}}">{{$degree->attachements}}</a>
        <input id="input-file-now-custom-2" class="dropify" data-height="500" type="file">
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
   </div>
</div>




{!! Form::close() !!}	
