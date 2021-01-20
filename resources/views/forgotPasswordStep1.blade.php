@extends('layouts.userlayout')

@section('content')
    <form action="{{url('/forgotpassword-mail')}}" method="post" class="w-25 mx-auto p-3 bg-dark text-white mt-5 rounded text-center my-2">
{{--        {{ @csrf_field()}}--}}
        @csrf
        <h1 class="text-danger text-center pb-4">Please enter your e-mail!</h1>
        <b>{{$errors->first("email")}}</b>
        <input type="text" name="email" class="form-control mb-3" placeholder="Email" value="{{old('email')}}">
        <button class="btn btn-danger" type="submit">Next</button>
    </form>
{{--    <h3>{{Session::get('error')}}</h3>--}}
@endsection

