@extends('layouts.userlayout')

@section('content')
    <form action="{{url('/forgotpassword/set-new-pass')}}" method="post" class="w-25 mx-auto p-3 bg-dark text-white mt-5 rounded text-center my-2">
        @csrf
        <h1 class="text-danger text-center pb-4">Please fill in the fields to change password!</h1>

        <b>{{$errors->first("new_pass")}}</b>
        <input type="text" name="new_pass" class="form-control mb-3" placeholder="New password" value="{{old('new_pass')}}">

        <b>{{$errors->first("confirm_pass")}}</b>
        <input type="text" name="confirm_pass" class="form-control mb-3" placeholder="Confirm new password" value="{{old('confirm_pass')}}">

        <button class="btn btn-danger" type="submit">Finish</button>
    </form>
    {{--    <h3>{{Session::get('error')}}</h3>--}}
@endsection

