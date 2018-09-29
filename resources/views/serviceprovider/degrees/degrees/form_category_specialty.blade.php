{!! Form::open(['url' => '/serviceprovider/degrees', 'class' => 'form-horizontal', 'files' => true]) !!}


<div> <h5><strong>Category (Medical Doctors)<img src="https://png.icons8.com/cotton/30/000000/doctors-folder.png"> </h5></div>
<div class="form-group {{ $errors->has('health_institution_name') ? 'has-error' : ''}}">
    {!! Form::label('health_institution_name', 'Category', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('health_institution_name', $degree->health_institution_name, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('health_institution_name', '<p class="help-block">:message</p>') !!}
    </div>
   </div>
<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Specialties', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', $degree->issuing_country, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('medical_education_level') ? 'has-error' : ''}}">
    {!! Form::label('medical_education_level', 'Service Request You Interested In', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medical_education_level', $degree->issuing_country, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('medical_education_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>


{!! Form::close() !!}	
