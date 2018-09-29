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
                        <div class="panel-wrapper collapse in">
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home1" aria-controls="home" role="tab"
                                                                          data-toggle="tab" aria-expanded="true"><span
                                                class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Academic Teaching</span></a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#profilerey" aria-controls="profile" role="tab"
                                                                    data-toggle="tab" aria-expanded="true"><span
                                                class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Academic Research</span></a>
                                </li>
                                <li role="presentation"><a href="#messages1" aria-controls="messages" role="tab"
                                                           data-toggle="tab"><span class="visible-xs"><i
                                                    class="ti-email"></i></span> <span class="hidden-xs">Experience</span></a>
                                </li>

                            </ul>
                            <div class="panel-body">
                                <div class="tab-content m-t-0">
                                    <div role="tabpanel" class="tab-pane fade active in" id="home1">                                     
                                    
                                    <div class="col-sm-12">
                <div class="white-box">
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <h3 class="box-title"> <div class="panel-heading">Faculty Academic Appointments<img src="https://png.icons8.com/cotton/40/000000/doctors-bag.png"></h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Affiliation Institution</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Example" class="form-control" ></div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Position</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Example" class="form-control" ></div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Time</label>
                                        <div class="col-lg-4">
                                    <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="09:30"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> TO </span> 
                                    <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="10:30"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Attachment</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="" class="form-control" ></div>
                                    </div>
                                    </div>
                                    </div>
                               </div>
                    </div><br>
                                    <!-- 2nd row -->
                                    <div style="background-color:#f0f0f0;">
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Academic Teaching Category</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option value="Category 1">Medical Doctors</option>
                                                <option value="Category 2">Nurse</option>
                                                <option value="Category 3">Medical Technician</option>
                                                <option value="Category 4">Therapist & Specialist</option>
                                            </select>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Affiliation Institution</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Example" class="form-control"> </div>
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name Your Position</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Example" class="form-control"> </div>
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Time</label>
                                        <div class="col-lg-4">
                                    <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="09:30"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> TO </span> 
                                    <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="10:30"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Upload Your Supported Document</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Upload Here" class="form-control"> </div>
                                        </div>   
                                    </div>
                                    <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-10 col-md-12">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Add New</button>
                                                </div>
                                            </div>
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

									<div class="clearfix"></div>
                                    </div>
                                    <div role="tabpane1" class="tab-pane fade" id="profilerey">
                                            
                                    <div class="col-sm-12">
                <div class="white-box">
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <h3 class="box-title"> <div class="panel-heading">Clinical Guidlines and Reports<img src="https://png.icons8.com/cotton/40/000000/doctors-bag.png"></h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Publication Title</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Example" class="form-control" ></div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Role</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Example" class="form-control" ></div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Time</label>
                                        <div class="col-lg-4">
                                    <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="09:30"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> TO </span> 
                                    <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="10:30"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Attachment</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="" class="form-control" ></div>
                                    </div>
                                    </div>
                                    </div>
                               </div>
                    </div><br>
                                    <!-- 2nd row -->
                                    <div style="background-color:#f0f0f0;">
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Academic Teaching Category</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option value="Category 1">Medical Doctors</option>
                                                <option value="Category 2">Nurse</option>
                                                <option value="Category 3">Medical Technician</option>
                                                <option value="Category 4">Therapist & Specialist</option>
                                            </select>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Publication Title</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Example" class="form-control"> </div>
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name Your Position</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Example" class="form-control"> </div>
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label col-md-3">Time</label>
                                        <div class="col-lg-4">
                                    <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="09:30"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> TO </span> 
                                    <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="10:30"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Upload Your Supported Document</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Upload Here" class="form-control"> </div>
                                        </div>   
                                    </div>
                                    <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-10 col-md-12">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Add New</button>
                                                </div>
                                            </div>
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

								       <div class="clearfix"></div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="messages1">
                                            
                            <div class="col-sm-12">
                            <div class="white-box">
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">
                                    <h3 class="box-title">Medical Equipment </h3>
                                    <h5>Name It, Name It, Name It </h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 95%" role="progressbar"><span class="sr-only">95% Complete (success)</span>
                                </div>
                            </div> <h5>Low Familiarity<span class="pull-right">High Familiarity</span></h5>

                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">
                                    <h3 class="box-title">Medical Team Leading/Supervising Positions </h3>
                                    <h5>Name It, Name It, Name It </h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 35%" role="progressbar"><span class="sr-only">95% Complete (success)</span>
                                </div>
                            </div> <h5>Low Familiarity<span class="pull-right">High Familiarity</span></h5>
                            
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">
                                    <h3 class="box-title">Medical Insurance Billing System Skills </h3>
                                    <h5>Name It, Name It, Name It </h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 75%" role="progressbar"><span class="sr-only">95% Complete (success)</span>
                                </div>
                            </div> <h5>Low Familiarity<span class="pull-right">High Familiarity</span></h5>
                            

                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">
                                    <h3 class="box-title">Languages </h3>
                                    <h5>Name It, Name It, Name It </h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 15%" role="progressbar"><span class="sr-only">95% Complete (success)</span>
                                </div>
                            </div> <h5>Low Familiarity<span class="pull-right">High Familiarity</span></h5>
                            
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">
                                    <h3 class="box-title">Medical Departments/units Experience </h3>
                                    <h5>Name It, Name It, Name It </h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 85%" role="progressbar"><span class="sr-only">95% Complete (success)</span>
                                </div>
                            </div> <h5>Low Familiarity<span class="pull-right">High Familiarity</span></h5>

                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">
                                    <h3 class="box-title">Surgical Skills</h3>
                                    <h5>Name It, Name It, Name It </h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 10%" role="progressbar"><span class="sr-only">95% Complete (success)</span>
                                </div>
                            </div> <h5>Low Familiarity<span class="pull-right">High Familiarity</span></h5>
                            
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">
                                    <h3 class="box-title">Policy and Qaulity Assessment Skills </h3>
                                    <h5>Name It, Name It, Name It </h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%" role="progressbar"><span class="sr-only">95% Complete (success)</span>
                                </div>
                            </div> <h5>Low Familiarity<span class="pull-right">High Familiarity</span></h5>
                            <br>
                            <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-6 col-md-12">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
                {{-- Add Degree Panel --}}

                

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