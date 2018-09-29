@extends('layouts.master')

@section('content')
    <div class="container-fluid1111">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">Training {{ $training->id }}</h3>
                    @can('view-'.str_slug('Training'))
                        <a class="btn btn-success pull-right" href="{{ url('/serviceprovider/trainings') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $training->id }}</td>
                            </tr>
                            <tr><th> Country </th><td> {{ $training->country }} </td></tr><tr><th> Year </th><td> {{ $training->year }} </td></tr><tr><th> Attachment </th><td> {{ $training->attachment }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

