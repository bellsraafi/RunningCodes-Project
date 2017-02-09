<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll"><!-- start of Page Sidebar -->
        <div class="sidebar-header">
        @if(Auth::check())
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="/images/profile_pics/{{Auth::user()->trainee->profile_pic }}" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span style="text-transform: capitalize;">{{ Auth::user()->trainee->first_name .' '. Auth::user()->trainee->last_name }}<br><small style="text-transform: uppercase;">Trainee</small></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li class="active"><a href="index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
            <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Profile</p></a></li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"></span><p>Mailbox</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="inbox.html">Inbox</a></li>
                    <li><a href="message-view.html">View Message</a></li>
                    <li><a href="compose.html">Compose</a></li>
                </ul>
            </li>
        </ul>
        @endif
    </div><!-- end of Page Sidebar Inner -->
</div><!-- end of Page Sidebar -->