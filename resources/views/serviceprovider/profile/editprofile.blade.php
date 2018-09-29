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
                
                @section('content')
<div class="container-fluid1111">
<div class="container-fluid1111">
    <!-- .row -->
    <div class="row el-element-overlay m-b-20">
        <div class="col-md-12">
        </div>
        <!-- /.usercard -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="">
                <div class="el-card-item">

                    <br><br><br><br><br><br><br><br><br><br><br><br>

                    <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th><strong>Identity Information</strong></th>
                                    </tr>
                                    </thead>
                                </table>
                                
                                </div>
                            </div>
                        </div>
                     </div>

                    <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th><strong>Medical Education</strong></th>
                                    </tr>
                                    <tr>
                                        <th><strong>Saudi Commission for Health <br> Specialties Information</strong></th>
                                    </tr>
                                    <tr>
                                        <th><strong>Academic Training & Research</strong></th>
                                    </tr>
                                    </thead>
                                </table>
                                </div>
                                <div class="col-lg-12 col-sm-4 col-xs-12">
                                <button class="btn btn-block btn-outline btn-info">Save</button>
                                </div><hr>
                                <div class="col-lg-12 col-sm-4 col-xs-12">
                                <button class="btn btn-block btn-outline btn-info">Save & Submit </button>
                                </div><br><br>
                            </div>
                        </div>
                     </div>
                    <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th><strong>Profile Transaction</strong></th>
                                    </tr>
                                    <tr>
                                        <th><strong>Payment Methods</strong></th>
                                    </tr>
                                    <tr>
                                        <th><strong>Settings</strong></th>
                                    </tr>
                                    </thead>
                                </table>
                                </div>
                            </div>
                        </div>
                     </div>

                </div>
            </div>
        </div>
        <!-- /.usercard-->
        <!-- /.usercard -->

    
        <div class="col-md-12 col-xs-12">
            <div class="user-bg"> <img width="100%" alt="user" src="{{asset('plugins/images/large/img1.jpg')}}">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img src="{{asset('plugins/images/users/jeffery.jpg')}}" alt="user-img" class="img-circle"></a>
                             </div>
                    </div>
                </div>
            
            <hr>
                      

<!-- /.row -->
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                <div class="panel-heading"></div>
                    <div class="table-responsive">
                      
                    <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <form action="#" class="form-horizontal form-bordered">
                                <div class="form-body">
                                <div class="form-group">
                                        <label class="control-label col-md-3">Title</label>
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
                                        <label class="control-label col-md-3">First Name</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Naif" class="form-control" ></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Last Name</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Alzahrani" class="form-control"> <span class="help-block"> Choose the name as you would like to apprear for the hiring medical organization </span> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nationality</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Saudi Arabia" class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">National ID</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="000000000" class="form-control"> <span class="help-block">For only Saudi national or other Gulf Cooperation Council citizens - enter the national ID & the country name </span> </div>
                                            <div class="form-group">
                                        <label class="control-label col-md-3">Upload ID</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="1 File Uploaded" class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email Address</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Naif@gmail.com" class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CellPhone Number</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="00000000000" class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Gender</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Street</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="12012 King  Farah  Rd"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">City & State</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Baha, Baha"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Country</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Saudi Arabia"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">About</label>
                                        <div class="col-md-12">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Edit</button>
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
        <!--./row-->
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- .row -->

    <!-- /.row -->
    @include('layouts.partials.right-sidebar')
</div>
@endsection

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

    </script>

@endpush