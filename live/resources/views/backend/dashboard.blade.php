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
</div>


    @stop
