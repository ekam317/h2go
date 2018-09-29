<nav class="navbar navbar-default navbar-static-top m-b-0" >
    <div class="navbar-header" >
	<div class='col-md-2 logo'>
	  <img src='{{asset("plugins/images/logo.png")}}'style="width: 58px;"/>
	</div>
	<div class='col-md-6 pull-right'>
        <ul class= "nav navbar-top-links navbar-right pull-right" style="background-color:#ffffff;">
            @if(auth()->check())
            <li class="right-side-toggle">
                <a class="right-side-toggler waves-effect waves-light b-r-0 font-17" href="javascript:void(0)">
                   <span style="color:#566573;">Contracts</span>
                </a>
            </li>
            <li class="right-side-toggle">
                <a class="right-side-toggler waves-effect waves-light b-r-0 font-17" href="javascript:void(0)">
                   <span style="color:#566573;">Reports</span>
                </a>
            </li>
                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light font-17" data-toggle="dropdown"
                       href="javascript:void(0);">
                       <span style="color:#566573;">Messages</span>
                        <span class="badge badge-xs badge-danger">6</span>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">You have 6 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{asset('plugins/images/users/1.jpg')}}" alt="user" class="img-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar @</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{asset('plugins/images/users/2.jpg')}}" alt="user" class="img-circle">
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">Ive sung a song! See you at</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{asset('plugins/images/users/3.jpg')}}" alt="user"
                                             class="img-circle"><span class="profile-status away pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span>
                                        <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{asset('plugins/images/users/4.jpg')}}" alt="user" class="img-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="text-center" href="javascript:void(0);">
                                <strong>See all notifications</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light font-17" data-toggle="dropdown"
                       href="javascript:void(0);">
                       <span style="color:#566573;">Notifications</span>
                        <span class="badge badge-xs badge-danger">3</span>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{asset('plugins/images/users/1.jpg')}}" alt="user" class="img-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{asset('plugins/images/users/2.jpg')}}" alt="user" class="img-circle">
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">Ive sung a song! See you at</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{asset('plugins/images/users/3.jpg')}}" alt="user"
                                             class="img-circle"><span class="profile-status away pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span>
                                        <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{asset('plugins/images/users/4.jpg')}}" alt="user" class="img-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="text-center" href="javascript:void(0);">
                                <strong>See all notifications</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="right-side-toggle">
                <a class="right-side-toggler waves-effect waves-light b-r-0 font-17" href="javascript:void(0)">
                   <span style="color:#566573;">Help</span>
                </a>
            </li>
            <li class="right-side-toggle">
                <ul class="list-inline">
                        <a  class="waves-effect waves-light b-r-0 font-20" href="{{'/logout'}}" >
                                    <li class="p-l-0">
                                        <img src="{{asset('plugins/images/users/1.png')}}" alt="user"
                                             data-toggle="tooltip" class="img-circle"
                                             data-placement="top" style="height:60px;" title="" data-original-title="Steave">
                                    </li>
                                </a>
                </a>
            </li>
            @else
                <li class="">
                    <a  class="waves-effect waves-light b-r-0 font-20" href="{{'/login'}}" >
                        <i class="icon-user"></i>
                    </a>
                </li>
            @endif

        </ul>
	 </div>
   </div>
</nav>
