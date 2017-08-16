@extends('backend.header')
@section('content')

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
        <a href="{{URL::to('/home/banner')}}"  >
            <span class="avatar-name">
                Banners
            </span>

        </a>



    @stop
