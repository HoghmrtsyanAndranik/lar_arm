@extends('layouts.userlayout')

@section('content')
    <form action="{{url('loginuser')}}" method="post" class="w-25 mx-auto p-3 bg-dark text-white mt-5 rounded text-center my-2" style="width: 25%">
       {{ @csrf_field()}}
        <h1 class="text-danger text-center pb-4">Signin</h1>
        <b>{{$errors->first("email")}}</b>
        <input type="text" name="email" class="form-control mb-3" placeholder="Email" value="{{old('email')}}">
        <b>{{$errors->first("password")}}</b>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" value="{{old('password')}}">
        <button class="btn btn-danger">Sign in</button>
    </form>

    <a href="{{url('/forgotpassword')}}">Forgot password</a>

<h3>{{Session::get('error')}}</h3>
@endsection

