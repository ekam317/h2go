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
                            
                            <h3 class="box-title">Profile Update #001 </h3>
                            <h5>Approved<span class="pull-right">Approved</span></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 95%" role="progressbar"><span class="sr-only">95% Complete (success)</span>
                                </div>
                            </div> <br>
                            <hr>
                            <h3 class="box-title">Profile Update #002 </h3>
                            <h5>This may take up to 3 business days<span class="pull-right">Under Processing</span></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 40%" role="progressbar"><span class="sr-only">40% Complete (success)</span>
                                </div>

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