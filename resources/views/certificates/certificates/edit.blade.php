@extends('layouts.master')
@section('content')
    <div class="container-fluid1111">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">Edit Certificate #{{ $certificate->id }}</h3>
                    @can('view-'.str_slug('Certificate'))
                        <a class="btn btn-success pull-right" href="{{ url('/serviceprovider/certificates') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($certificate, [
                        'method' => 'PATCH',
                        'url' => ['/serviceprovider/certificates', $certificate->id],
                        'class' => 'form-horizontal',
                        'files' => true
                    ]) !!}

                    @include ('certificates.certificates.form', ['submitButtonText' => 'Update'])

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
