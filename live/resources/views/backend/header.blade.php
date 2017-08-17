@extends('backend.master')
<div class="wrapper tables">
    <aside class="sidebar table-cells">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/home')}}">
                    <img class="img-responsive" src="{{URL::to('/')}}/backend/assets/img/Green-Computing-Nepal.png" alt=""/>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{URL::to('/home')}}">
                        <i class="pe-7s-graph"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/home/applications')}}">
                        <i class="pe-7s-user"></i>
                        <span>Applications</span>
                    </a>
                </li>
                <li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">
                   <i class="pe-7s-graph"></i>
                   <span>Country </span></a>
                   <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
                    <li><a href="{{ url('home/country/create') }}">Create country</a></li>
                    <li><a href="{{ url('home/country') }}">Manage country</a></li>

                </ul>

            </li>
            <li><a href="#" id="btn-2" data-toggle="collapse" data-target="#submenu2" aria-expanded="false">
               <i class="pe-7s-graph"></i>
               <span>Education Level </span></a>
               <ul class="nav collapse" id="submenu2" role="menu" aria-labelledby="btn-2">
                <li><a href="{{ url('home/educationlevel/create') }}">Create educationlevel</a></li>
                <li><a href="{{ url('home/educationlevel') }}">Manage educationlevel</a></li>

            </ul>

        </li>
            <li><a href="#" id="btn-3" data-toggle="collapse" data-target="#submenu3" aria-expanded="false">
               <i class="pe-7s-graph"></i>
               <span>Interested Course</span></a>
               <ul class="nav collapse" id="submenu3" role="menu" aria-labelledby="btn-3">
                <li><a href="{{ url('home/interestedcourse/create') }}">Create Interestedcourse</a></li>
                <li><a href="{{ url('home/interestedcourse') }}">Manage Interestedcourse</a></li>

            </ul>

        </li>

             <li><a href="#" id="btn-4" data-toggle="collapse" data-target="#submenu4" aria-expanded="false">
               <i class="pe-7s-graph"></i>
               <span>Testimonial</span></a>
               <ul class="nav collapse" id="submenu4" role="menu" aria-labelledby="btn-4">
                <li><a href="{{ url('home/testimonial/create') }}">Create testimonial</a></li>
                <li><a href="{{ url('home/testimonial') }}">Manage testimonial</a></li>

            </ul>

        </li>
    </ul>
</div>

</aside>
<div class="main-content table-cells">
   <nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <a class="toggle-menu" href="#">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <ul class="nav navbar-nav navbar-right pull-right">
            <li>
                <a href="#" data-toggle="collapse" data-target="#dropdown-user">
                    <span class="avatar-name">
                        {{Auth::user()->name}}
                    </span>
                    <img src="{{URL::to('/backend')}}/assets/img/default-avatar.png" alt="" class="avatar img-circle">
                </a>
                <ul id="dropdown-user" class="collapse">
                    <li>
                       <span>
                        <a href="profile.html">
                            <i class="pe-7s-user"></i>
                            <span>profile</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>
                        <a href="{{url('/logout')}}">
                            <i class="pe-7s-power"></i>
                            <span>logout</span>
                        </a>
                    </span>
                </li>
            </ul>
        </li>
    </ul>
</div>
</nav>
<div class="col-sm-12">
    @yield('content')
</div>
@extends('backend.footer')
</div>

</div>