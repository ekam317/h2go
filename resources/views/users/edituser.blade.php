@extends('layouts.master')

@push('css')
    <link href="{{ asset('plugins/components/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{asset('plugins/components/icheck/skins/all.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet"/>
    {{--<link href="{{asset('plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">--}}
    <link href="{{asset('plugins/components/jqueryui/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
    <style>

        #rootwizard .nav.nav-pills {
            margin-bottom: 25px;
        }

        .help-block {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
        }
        .nav-pills>li>a{
            cursor: default;;
            background-color: inherit;
        }
        .nav-pills>li>a:focus,.nav-tabs>li>a:focus, .nav-pills>li>a:hover, .nav-tabs>li>a:hover {
            border: 1px solid transparent!important;
            background-color: inherit!important;
        }

        .has-error .help-block {
            color: #EF6F6C;
        }

        .select2 {
            width: 100% !important;
        }
        .error-block{
            background-color: #ff9d9d;
            color: red;
        }
    </style>
@endpush

@section('content')
  <div class="container-fluid1111">
        <!-- /.usercard-->
        <!-- /.usercard -->

    
        <div class="col-md-12 col-xs-12">
            <div class="user-bg"> <img src="{{asset('plugins/images/big/img1.jpg')}}" alt="user-img" class="img-circle"> 
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"> <img src="{{asset('plugins/images/users/jeffery.jpg')}}" alt="user-img" class="img-circle"></a>
                             </div>
                    </div>
                </div>
            
            <hr>
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
                                                <option value="Category 1" selected="selected">Medical Doctors</option>
                                                <option value="Category 2">Nurse</option>
                                                <option value="Category 3">Medical Technician</option>
                                                <option value="Category 4">Therapist &amp; Specialist</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">First Name</label>
                                        <div class="col-md-9">
                                            <input placeholder="Naif" class="form-control" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" type="text" value="{{$user->name}}"></div>
											 {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Last Name</label>
                                        <div class="col-md-9">
                                            <input placeholder="Alzahrani" class="form-control" type="text"> <span class="help-block"> Choose the name as you would like to apprear for the hiring medical organization </span> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nationality</label>
                                        <div class="col-md-9">
                                            <input placeholder="Saudi Arabia" class="form-control" type="text"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">National ID</label>
                                        <div class="col-md-9">
                                            <input placeholder="000000000" class="form-control" type="text"> <span class="help-block">For only Saudi national or other Gulf Cooperation Council citizens - enter the national ID &amp; the country name </span> </div>
                                            <div class="form-group">
                                        <label class="control-label col-md-3">Upload ID</label>
                                        <div class="col-md-9">
                                            <input placeholder="1 File Uploaded" class="form-control" type="text"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email Address</label>
                                        <div class="col-md-9">
                                            <input placeholder="Naif@gmail.com" class="form-control" type="text" value="{{$user->email}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CellPhone Number</label>
                                        <div class="col-md-9">
                                            <input placeholder="00000000000" class="form-control" type="text"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Gender</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option value="" selected="selected">Male</option>
                                                <option value="">Female</option>
                                            </select></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="dd/mm/yyyy" type="text"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Street</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="12012 King  Farah  Rd" type="text"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">City &amp; State</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="Baha, Baha" type="text"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Country</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="Saudi Arabia" type="text"> </div>
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
                            
                        </div>
                    </div></form>
                </div>
            </div>
        </div>
        <!--./row-->
                       
                    </div>
                </div>
            </div>
        </div>
        </div>
		</div>
		@endsection

@push('js')
    <script src="{{ asset('plugins/components/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{asset('plugins/components/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('plugins/components/icheck/icheck.init.js')}}"></script>
    <script src="{{asset('plugins/components/moment/moment.js')}}"></script>
    {{--<script src="{{asset('plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>--}}
    <script src="{{asset('plugins/components/jqueryui/jquery-ui.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"
            type="text/javascript"></script>
    <script src="{{asset('plugins/components/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{ asset('js/edituser.js') }}"></script>


@endpush