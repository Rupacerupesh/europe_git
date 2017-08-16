@extends('backend.header')
@section('content')
<div class="navigation-holder">
        <a href="{{URL::to('/home/applications')}}"  >
            <span class="avatar-name">
                Applications
            </span>
             
        </a>
        <a href="{{URL::to('/home/navigation')}}"  >
            <span class="avatar-name">
                Navigations
            </span>

        </a>
        <a href="{{URL::to('/home/advertisement')}}"  >
            <span class="avatar-name">
                Advertisements
            </span>

        </a>
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
        <a href="{{URL::to('/home/banner')}}"  >
            <span class="avatar-name">
                Banners
            </span>

        </a>
>>>>>>> Stashed changes
</div>
=======
        <a href="{{URL::to('/home/banner')}}"  >
            <span class="avatar-name">
                Banners
            </span>

        </a>

>>>>>>> fae6bd280ee446541d43356e58d9cdaefe34302b


    @stop
