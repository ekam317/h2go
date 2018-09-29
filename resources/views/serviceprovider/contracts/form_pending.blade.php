@extends('layouts.master')

@section('content')
    <div class="container-fluid1111">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="panel panel-default">
                        <div class="panel-heading"> <strong>Contracts</strong></div>
                        <div class="panel-wrapper collapse in">
                            <ul class="nav customtab nav-tabs" role="tablist">

                                <li role="presentation" class="active">
                                    <a href="#pending" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs">
                                            <i class="ti-home"></i>
                                        </span>
                                        <span class="hidden-xs"> Pending</span>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#scheduled" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs">
                                            <i class="ti-user"></i>
                                        </span>
                                        <span class="hidden-xs">Scheduled</span>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#active" aria-controls="messages" role="tab" data-toggle="tab">
                                        <span class="visible-xs">
                                            <i class="ti-email"></i>
                                        </span>
                                        <span class="hidden-xs">Active</span>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#finished" aria-controls="messages" role="tab" data-toggle="tab">
                                        <span class="visible-xs">
                                            <i class="ti-email"></i>
                                        </span>
                                        <span class="hidden-xs">Finished</span>
                                    </a>
                                </li>

                            </ul>

                            {{-- Panel Body --}}
                            <div class="panel-body">
                                {{-- Tab Content --}}
                                <div class="tab-content m-t-0">
                                    <div role="tabpanel" class="tab-pane fade active in" id="pending">
                                <div class="panel panel-default block2">
                                <div class="panel-heading"><div class="sl-left">
                                <div class="panel-action"><a href="#" data-perform="panel-collapse"><img src="https://png.icons8.com/ios/25/000000/expand-arrow-filled.png"></i></a></div>
                                </div>
                                <img class="img-circle" alt="user" src="plugins/images/users/hanna.jpg" <h3><strong>Hospital Name</strong><img src="https://png.icons8.com/cotton/30/000000/doctors-bag.png"></h3>
                                    <div>
                                
                                <div class="panel-wrapper collapse in">
                                <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5><strong>Contract Number</strong> <small>0210451</small> </h5> 
                                                <h5><strong>Request Date</strong> <small>Aug 2, 2018</small> </h5> 
                                                <h5><strong>Service Date & Time</strong></h5>
                                                <small>
                                                    Monday Aug 2, 2018
                                                <br>
                                                    8:00 am - 4:00 pm
                                                </small>
                                            </div>
                                            <div class="col-md-5">
                                               <h5><strong>Contract Summary:</strong></h5>
                                               <span><small>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                               </small></span>
                                               <br>
                                               <h5><strong>Category</strong> <small>an Category</small> </h5>
                                               <h5><strong>Specialty </strong><small>an Specialty</small> </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-4 col-md-offset-4 text-center" style="border: 2px solid #ccc; height: 125px; width: 125px; border-radius: 62px;">
                                                        <div style="margin-top: 12px;">
                                                            <span style="font-size: 12px;">Waiting for confirmation</span>
                                                            <span style="font-size: 25px;">19:59</span>
                                                            <small class="text-muted" >minutes</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" >
                                                        <button class="btn btn-xs btn-primary pull-right" >Regular</button>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <h5>Time</h5>
                                                        <h2>12</h2>
                                                        <small class="text-muted">Hours</small>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #ccc;">
                                                        <h5>Cost</h5>
                                                        <h2>120.00</h2>
                                                        <small class="text-muted">SAR/H</small>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #ccc;" >
                                                        <h5>Total Cost</h5>
                                                        <h2>720.00</h2>
                                                        <small class="text-muted">SAR</small>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top: 10px;">
                                                    <div class="col-md-4 col-sm-offset-2">
                                                        <button class="btn btn-sm btn-default pull-right" style="border: 1px solid #000;" >Edit</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-sm btn-default pull-right" style="background-color: black; color: white; border-color: black;" >Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default block2">
                                <div class="panel-heading"><div class="sl-left">
                                <div class="panel-action"><a href="#" data-perform="panel-collapse"><img src="https://png.icons8.com/ios/25/000000/expand-arrow-filled.png"></i></a></div>
                                </div>
                                <img class="img-circle" alt="user" src="plugins/images/users/hanna.jpg" <h3><strong>Hospital Name</strong><img src="https://png.icons8.com/cotton/30/000000/doctors-bag.png"></h3>
                                    <div>
                                
                                <div class="panel-wrapper collapse in">
                                <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5><strong>Contract Number</strong> <small>0210451</small> </h5> 
                                                <h5><strong>Request Date</strong> <small>Aug 2, 2018</small> </h5> 
                                                <h5><strong>Service Date & Time</strong></h5>
                                                <small>
                                                    Monday Aug 2, 2018
                                                <br>
                                                    8:00 am - 4:00 pm
                                                </small>
                                            </div>
                                            <div class="col-md-5">
                                               <h5><strong>Contract Summary:</strong></h5>
                                               <span><small>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                               </small></span>
                                               <br>
                                               <h5><strong>Category</strong> <small>an Category</small> </h5>
                                               <h5><strong>Specialty </strong><small>an Specialty</small> </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-4 col-md-offset-4 text-center" style="border: 2px solid #ccc; height: 125px; width: 125px; border-radius: 62px;">
                                                        <div style="margin-top: 12px;">
                                                            <span style="font-size: 12px;">Waiting for confirmation</span>
                                                            <span style="font-size: 25px;">13:21</span>
                                                            <small class="text-muted" >minutes</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" >
                                                        <button class="btn btn-xs btn-primary pull-right" >Urgent</button>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <h5>Time</h5>
                                                        <h2>12</h2>
                                                        <small class="text-muted">Hours</small>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #ccc;">
                                                        <h5>Cost</h5>
                                                        <h2>145</h2>
                                                        <small class="text-muted">SAR/H</small>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #ccc;" >
                                                        <h5>Total Cost</h5>
                                                        <h2>2,030.00</h2>
                                                        <small class="text-muted">SAR</small>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top: 10px;">
                                                    <div class="col-md-4 col-sm-offset-2">
                                                        <button class="btn btn-sm btn-default pull-right" style="border: 1px solid #000;" >Edit</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-sm btn-default pull-right" style="background-color: black; color: white; border-color: black;" >Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                 </div>
                                    {{-- /Pending --}}
                                    {{-- Scheduled --}}
                                    <div role="tabpanel" class="tab-pane fade" id="scheduled">
                                    <div class="panel panel-default block2">
                                <div class="panel-heading"><div class="sl-left">
                                <div class="panel-action"><a href="#" data-perform="panel-collapse"><img src="https://png.icons8.com/ios/25/000000/expand-arrow-filled.png"></i></a></div>
                                </div>
                                <img class="img-circle" alt="user" src="plugins/images/users/hanna.jpg" <h3><strong>Hospital Name</strong><img src="https://png.icons8.com/cotton/30/000000/doctors-bag.png"></h3>
                                    <div>
                                
                                <div class="panel-wrapper collapse in">
                                <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5><strong>Contract Number</strong> <small>0210451</small> </h5> 
                                                <h5><strong>Request Date</strong> <small>Aug 2, 2018</small> </h5> 
                                                <h5><strong>Service Date & Time</strong></h5>
                                                <small>
                                                    Monday Aug 2, 2018
                                                <br>
                                                    8:00 am - 4:00 pm
                                                </small>
                                            </div>
                                            <div class="col-md-5">
                                               <h5><strong>Contract Summary:</strong></h5>
                                               <span><small>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                               </small></span>
                                               <br>
                                               <h5><strong>Category</strong> <small>an Category</small> </h5>
                                               <h5><strong>Specialty </strong><small>an Specialty</small> </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-4 col-md-offset-4 text-center" style="border: 2px solid #ccc; height: 125px; width: 125px; border-radius: 62px;">
                                                        <div style="margin-top: 12px;">
                                                            <span style="font-size: 12px;">Waiting for confirmation</span>
                                                            <span style="font-size: 25px;">19:59</span>
                                                            <small class="text-muted" >minutes</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" >
                                                        <button class="btn btn-xs btn-primary pull-right" >Regular</button>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <h5>Time</h5>
                                                        <h2>12</h2>
                                                        <small class="text-muted">Hours</small>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #ccc;">
                                                        <h5>Cost</h5>
                                                        <h2>120.00</h2>
                                                        <small class="text-muted">SAR/H</small>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #ccc;" >
                                                        <h5>Total Cost</h5>
                                                        <h2>720.00</h2>
                                                        <small class="text-muted">SAR</small>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top: 10px;">
                                                    <div class="col-md-4 col-sm-offset-2">
                                                        <button class="btn btn-sm btn-default pull-right" style="border: 1px solid #000;" >Edit</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-sm btn-default pull-right" style="background-color: black; color: white; border-color: black;" >Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                                    </div>

                                    {{-- /Scheduled --}}

                                    {{-- Active --}}
                                    <div role="tabpanel" class="tab-pane fade" id="active">
                                    <div class="sl-left">
                                    <img class="img-circle" alt="user" src="plugins/images/users/hanna.jpg" <h3><strong>Hospital Name</strong><img src="https://png.icons8.com/cotton/30/000000/doctors-bag.png"></h3>
                                    <div><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5><strong>Contract Number </strong><small>0210451</small> </h5> 
                                                <h5><strong>Request Date </strong><small>Aug 2, 2018</small> </h5> 
                                                <h5><strong>Service Date & Time</strong></h5>
                                                <small>
                                                    Monday Aug 2, 2018
                                                <br>
                                                    8:00 am - 4:00 pm
                                                </small>
                                            </div>
                                            <div class="col-md-5">
                                               <h5><strong>Contract Summary:</strong></h5>
                                               <span>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                               </span>
                                               <br>
                                               <h5><strong>Category </strong><small>an Category</small> </h5>
                                               <h5><strong>Specialty </strong><small>an Specialty</small> </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-4 col-md-offset-2 text-center" style="border: 2px solid #8cf; height: 125px; width: 125px; border-radius: 62px;">
                                                        <div style="margin-top: 20px;">
                                                            <span style="font-size: 12px;">Time</span>
                                                            <br>
                                                            <span style="font-size: 25px;">06</span>
                                                            <br>
                                                            <small class="text-muted" >Hours</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" >
                                                        <button class="btn btn-xs btn-primary pull-right" >Regular</button>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <h5>Cost</h5>
                                                        <h2>120.00</h2>
                                                        <small class="text-muted">SAR/H</small>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #ccc;" >
                                                        <h5>Total Cost</h5>
                                                        <h2>720.00</h2>
                                                        <small class="text-muted">SAR</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    {{-- /Active --}}
                                    
                                    {{-- Finished --}}
                                    <div role="tabpanel" class="tab-pane fade" id="finished">
                                         <h3>Hospital Name</h3>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5>Contract Number <small>0210451</small> </h5> 
                                                <h5>Request Date <small>Aug 2, 2018</small> </h5> 
                                                <h5>Service Date & Time</h5>
                                                <small>
                                                    Monday Aug 2, 2018
                                                <br>
                                                    8:00 am - 4:00 pm
                                                </small>
                                            </div>
                                            <div class="col-md-5">
                                               <h5>Contract Summary:</h5>
                                               <span>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                               </span>
                                               <br>
                                               <h5>Category <small>an Category</small> </h5>
                                               <h5>Specialty <small>an Specialty</small> </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-4 col-md-offset-2 text-center" style="border: 2px solid #8cf; height: 125px; width: 125px; border-radius: 62px;">
                                                        <div style="margin-top: 20px;">
                                                            <span style="font-size: 12px;">Time</span>
                                                            <br>
                                                            <span style="font-size: 25px;">06</span>
                                                            <br>
                                                            <small class="text-muted" >Hours</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" >
                                                        <button class="btn btn-xs btn-primary pull-right" >Regular</button>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <h5>Cost</h5>
                                                        <h2>120.00</h2>
                                                        <small class="text-muted">SAR/H</small>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #ccc;" >
                                                        <h5>Total Cost</h5>
                                                        <h2>720.00</h2>
                                                        <small class="text-muted">SAR</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        {{-- Finished Review Row --}}
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1" >
                                               <ul class="nav customtab nav-tabs" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a href="#reviews-about-you" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                                                            <span class="visible-xs">
                                                                <i class="ti-home"></i>
                                                            </span>
                                                            <span class="hidden-xs"> Reviews About You</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="">
                                                        <a href="#reviews-by-you" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                                                            <span class="visible-xs">
                                                                <i class="ti-user"></i>
                                                            </span>
                                                            <span class="hidden-xs">Reviews by You</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                {{-- Panel Body Finished Review --}}
                                                <div class="panel-body">
                                                    {{-- Tab Content --}}
                                                    <div class="tab-content m-t-0">
                                                        {{-- Reviews About You --}}
                                                        <div role="tabpanel" class="tab-pane fade active in" id="reviews-about-you">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <h5>Feedback</h5>
                                                                    <span>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                    cillum dolore eu fugiat nulla pariatur.
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="row" >
                                                                        <div class="col-md-6">
                                                                            <h6>Criteria #1</h6>
                                                                            <small class="text-muted" >Star Ratings</small>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h6>Criteria #3</h6>
                                                                            <small class="text-muted" >Star Ratings</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" >
                                                                        <div class="col-md-6">
                                                                            <h6>Criteria #2</h6>
                                                                            <small class="text-muted" >Star Ratings</small>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h6>Criteria #4</h6>
                                                                            <small class="text-muted" >Star Ratings</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- /Reviews About You --}}

                                                        {{-- Reviews by You --}}
                                                        <div role="tabpanel" class="tab-pane fade" id="reviews-by-you">
                                                         by you
                                                        </div>
                                                        {{-- /Reviews by You --}}
                                                    </div>
                                                    {{-- /Tab Content --}}
                                                </div>
                                                {{-- /Panel Body Finished Review --}}
                                            </div>
                                        </div>
                                        {{-- Finished Review Row --}}
                                    </div>
                                    {{-- /Finished --}}
                                </div>
                                {{-- /Tab Content --}}
                            </div>
                            {{-- /Panel Body --}}
                        </div>
                        {{-- end of panel-wrapper --}}
                    </div> 
                {{-- panel end --}}
                </div>
                {{-- white-box --}}
            </div>
            {{-- col-sm-12 --}}
        </div>
        {{-- row --}}
    </div>

@endsection

