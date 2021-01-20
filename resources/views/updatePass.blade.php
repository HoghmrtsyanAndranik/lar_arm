@extends('layouts.userlayout')

    @section('title','Update password')
    @section('content')
    <form action="{{url('updatePassUser')}}" mehod="post"  class="w-25 mx-auto p-3 bg-dark text-white mt-5 rounded text-center">
    <h5 class="my-3 mb-5 text-danger">Update password</h5>
        <b>{{$errors->first("oldPass")}}</b>
        <input type="password" name="oldPass" placeholder="Enter old password" class="form-control mb-3 p-3">
        <b>{{$errors->first("newPass")}}</b>
        <input type="password" name="newPass" placeholder="Enter new password" class="form-control mb-3 p-3">
        <b>{{$errors->first("reNewPass")}}</b>
        <input type="password" name="reNewPass" placeholder="Reenter new password" class="form-control mb-3 p-3">
        <button class="btn btn-danger">Change</button>
    </form>
    @endsection

