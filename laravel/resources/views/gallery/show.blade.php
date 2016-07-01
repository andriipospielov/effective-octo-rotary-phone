@extends('app')

@section('content')

    <h1>{{$article->item_name}}
        <a href="{{action('GalleryController@edit', [$article->id])}}">(edit)</a>

        <a href="{{action('GalleryController@index')}}">(back to list)</a>
    </h1>
    <hr>
    Description:

    {{$article->description}}
    <br>

    Author:
    {{$article->user->name}}
    <hr>

    <img src= "/userdata/{{$article->image_url}}" alt="{{$article->image_url}}" >



    <br>



@stop