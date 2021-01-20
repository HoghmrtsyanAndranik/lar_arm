@extends('layouts.userlayout')

@section('content')
    <form action="{{url('/editmyitemdata')}}" enctype="multipart/form-data" method="post">
        {{ @csrf_field()}}

        <input type="hidden" value="{{$product->id}}" name="id">

        <label>Name: <input type="text" value="{{$product->name}}" class="form-control" name="name"></label>
        <br>
        <label>Price: <input type="text" value="{{$product->price}}" class="form-control" name="price"></label>
        <br>
        <label>Count: <input type="text" value="{{$product->count}}" class="form-control" name="count"></label>
        <br>
        <label>Description: <input type="text" value="{{$product->description}}" class="form-control" name="description"></label>
        <br>
        <input type="file" name="photo[]" multiple>
        <button>Edit data</button>
    </form>

    @endsection
