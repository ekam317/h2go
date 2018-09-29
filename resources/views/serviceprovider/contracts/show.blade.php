@extends('layouts.master')

@section('content')
    <div class="container-fluid1111">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">Contract {{ $contract->id }}</h3>
                    @can('view-'.str_slug('Contract'))
                        <a class="btn btn-success pull-right" href="{{ url('/serviceprovider/contracts') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $contract->id }}</td>
                            </tr>
                            <tr><th> Category Id </th><td> {{ $contract->category_id }} </td></tr><tr><th> Speciality Id </th><td> {{ $contract->speciality_id }} </td></tr><tr><th> Request Date </th><td> {{ $contract->request_date }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

