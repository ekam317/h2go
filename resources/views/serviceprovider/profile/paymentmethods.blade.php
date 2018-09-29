@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
@endpush

@section('content')
    <div class="container-fluid1111">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="panel panel-default">
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">
                                    <div style="background-color:#f0f0f0;">
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="control-label col-md-3"><strong>Bank Name</strong></label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Name of the Bank" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label col-md-3"><strong>Account Number</strong></label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="0000000000" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label col-md-3"><strong>IBAN</strong></label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="SA000000000" class="form-control"> </div>
                                        </div>   
                                    </div>
                                    <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Edit</button>
                                                </div><br>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
        </div>
    </div>
@endsection



@push('js')
    <script src="{{asset('plugins/components/toast-master/js/jquery.toast.js')}}"></script>

    <script src="{{asset('plugins/components/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {

            @if(\Session::has('message'))
            $.toast({
                heading: 'Success!',
                position: 'top-center',
                text: '{{session()->get('message')}}',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
            @endif
        })

        $(function () {
            $('#myTable').DataTable({
                'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': [-1] /* 1st one, start by the right */
                }]
            });

        });
    </script>

@endpush