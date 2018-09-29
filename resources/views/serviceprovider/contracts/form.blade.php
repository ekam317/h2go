<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    {!! Form::label('category_id', 'Category Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('category_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('speciality_id') ? 'has-error' : ''}}">
    {!! Form::label('speciality_id', 'Speciality Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('speciality_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('speciality_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('request_date') ? 'has-error' : ''}}">
    {!! Form::label('request_date', 'Request Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('request_date', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('request_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('summary') ? 'has-error' : ''}}">
    {!! Form::label('summary', 'Summary', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('summary', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('summary', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('totaltime') ? 'has-error' : ''}}">
    {!! Form::label('totaltime', 'Totaltime', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('totaltime', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('totaltime', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    {!! Form::label('cost', 'Cost', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('cost', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('currency') ? 'has-error' : ''}}">
    {!! Form::label('currency', 'Currency', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('currency', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('currency', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('totalcost') ? 'has-error' : ''}}">
    {!! Form::label('totalcost', 'Totalcost', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('totalcost', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('totalcost', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('request_type') ? 'has-error' : ''}}">
    {!! Form::label('request_type', 'Request Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('request_type', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('request_type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('status', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('hit_id') ? 'has-error' : ''}}">
    {!! Form::label('hit_id', 'Hit Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('hit_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('hit_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
