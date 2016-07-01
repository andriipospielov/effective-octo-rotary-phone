@extends('app')

@section('content')


    <h1>List of Images:</h1>
    <a href="{{action('GalleryController@create')}}">add a new one</a>

    <hr/>
    @foreach($articles  as  $article)

        <article>
            <h2>
                <a href="{{action('GalleryController@show', [$article->id])}}">
                    <img src="userdata/{{$article->image_url}}" alt="">
                </a>
            </h2>

            <div class="body">{{$article->item_description}}</div>

        </article>
    @endforeach
@stop