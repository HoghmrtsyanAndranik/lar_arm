

@extends('layouts.userlayout')

@section('css')<link rel="stylesheet" href="{{asset('css/style.css')}}">@endsection
@section('title','Profile')

@section('content')
    <div class="container-fluid well span6">
        <div class="row-fluid">
            <div class="span2" >
                <img src="https://widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-9.png" class="img-circle">
            </div>

            <div class="span8">
                <h3 class="my-4 mb-5">{{$user->name." ".$user->surname}}</h3>
                <h6>User id: {{$user->id}}</h6>
                <h6>Email: {{$user->email}}</h6>
                <h6>Age: {{$user->age}}</h6>
                <h6><a href="#">More... </a></h6>
            </div>

            <div class="span2">
                <div class="btn-group">
                    <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                        Action
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('logout')}}"><span class="fas fa-sign-out-alt"></span>Logout</a></li>
                        <li><a href="{{url('updatePass')}}"><span class="icon-wrench"></span> Modify</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
{{-- <img src="{{asset('img/download.png')}}" alt=""> --}}

@section('js')<script src="{{asset('js/script.js')}}"></script>@endsection

{{-- <!-- {{$user->name}} --> --}}
{{-- <!-- {{dd($user)}} --> --}}

{{--
profileum tpel tvyalnery   v
logout v
password edit
old new new ->update(['password'=>Hash:make()])

new renew edit
registration validation
name edit
surname edit
age edit

--}}
