@extends('layouts.master')
@push('css')
@endpush

@section('content')
    <div class="container-fluid1111">
    <div class="white-box">
        <!-- row -->
        <div class="row">
            <div class="col-sm-12">
                    <h2 class="box-title">Urgent Service Request</h2>
                    <div id="gmaps-simple" class="gmaps"></div><br>
                    <div class="form-group">
                        <div class="col-md-6">
                        <input type="text" placeholder="City, State, ZIP Code" class="form-control" ></div>
                     </div>
                </div>
                <!-- Nav tabs -->
                <ul class="nav customtab nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab"
                                                                  data-toggle="tab" aria-expanded="true"><span
                                        class="visible-xs"><i class="ti-home"></i></span><span
                                        class="hidden-xs"> Specialty</span></a></li>
                        <li role="presentation" class=""><a href="#profile1" aria-controls="profile" role="tab"
                                                            data-toggle="tab" aria-expanded="false"><span
                                        class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Filters</span></a>
                        </li>
                        <li role="presentation" class=""><a href="#messages1" aria-controls="messages" role="tab"
                                                            data-toggle="tab" aria-expanded="false"><span
                                        class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Time</span></a>
                        </li>
                        <li role="presentation" class=""><a href="#settings1" aria-controls="settings" role="tab"
                                                            data-toggle="tab" aria-expanded="false"><span
                                        class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Cost & Push</span></a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="home1">
                        <div class="white-box">
                        <h3 class="m-b-0 box-title">Specialty </h3><hr>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-success">Emergency Room Doctor</button>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default">Emergency Room Nurse</button>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default">Clitical Care (ICU) Doctor</button>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default">Clitical Care (ICU) Nurse</button>
                        </div> <hr>
                        <div class="col-lg-3 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default">Cardiology Cath Lab Doctor</button>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default">Cardiology Cath Lab Team</button>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default">Stroke Cath Lab Doctor</button>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default">Other</button>
                        </div><br><br><br><br><br>
                        <div class="col-md-offset-10 col-md-2">
                        <button class="btn btn-block btn-outline btn-primary">Next</button>
                        </div>
                        </div>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile1">
                                 <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="row line-steps">
                    <div class="col-md-3 column-step start">
                        <div class="step-number">1</div>
                        <div class="step-title">Specialty</div>
                    </div>
                    <div class="col-md-3 column-step active">
                        <div class="step-number">2</div>
                        <div class="step-title">Filters</div>
                    </div>
                    <div class="col-md-3 column-step upcoming">
                        <div class="step-number">3</div>
                        <div class="step-title">Board</div>
                    </div>
                    <div class="col-md-3 column-step finish">
                        <div class="step-number">4</div>
                        <div class="step-title">Availability</div>
                    </div>

                    <div class="col-md-offset-1 col-md-2">
                    <div class="skin skin-square">
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="input-group">
                                    <ul class="icheck-list">
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-1">Male</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-2" checked data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-2">Female</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                             </div>
                    </div>

                    <div class="col-md-offset-1 col-md-2">
                    <div class="skin skin-square">
                            <div class="form-group">
                                <label>Rating</label>
                                <div class="input-group">
                                    <ul class="icheck-list">
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-1">Male</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-2" checked data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-2">Female</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                             </div>
                    </div>

                    <div class="col-md-offset-1 col-md-2">
                    <div class="skin skin-square">
                            <div class="form-group">
                                <label>Board</label>
                                <div class="input-group">
                                    <ul class="icheck-list">
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-1">United State</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-2" checked data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-2">Saudi Arabia</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-2" checked data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-2">Canada</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                             </div>
                    </div>

                    <div class="col-md-offset-1 col-md-2">
                    <div class="skin skin-square">
                            <div class="form-group">
                                <label>Availability</label>
                                <div class="input-group">
                                    <ul class="icheck-list">
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-1">Fulltime</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-2" checked data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-2">Shorttime</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                             </div>
                    </div>
                    <div class="col-md-offset-10 col-md-2">
                        <button class="btn btn-block btn-outline btn-primary">Next</button>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                        </div>
               
                        <div role="tabpanel" class="tab-pane fade" id="messages1">
                            <div class="col-md-6">
                                 Test 3
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="settings1">
                            <div class="col-md-6">
                               Test 4
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- /.row -->
        
        @include('layouts.partials.right-sidebar')
    
@endsection

@push('js')
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('plugins/components/gmaps/gmaps.min.js')}}"></script>
    <script src="{{asset('plugins/components/gmaps/jquery.gmaps.js')}}"></script>
@endpush

