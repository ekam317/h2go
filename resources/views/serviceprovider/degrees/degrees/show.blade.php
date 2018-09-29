@extends('layouts.master')

@section('content')
    <div class="container-fluid1111">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">Degree {{ $degree->id }}</h3>
                    @can('view-'.str_slug('Degree'))
                        <a class="btn btn-success pull-right" href="{{ url('/serviceprovider/degrees') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $degree->id }}</td>
                            </tr>
                            <tr><th> Health Institution Name </th><td> {{ $degree->health_institution_name }} </td></tr><tr><th> Issuing Country </th><td> {{ $degree->issuing_country }} </td></tr><tr><th> Attachements </th><td> {{ $degree->attachements }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

