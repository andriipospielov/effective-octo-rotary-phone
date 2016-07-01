@extends('app')

@section('content')
    <h1>Edit: {!! $article->title !!}</h1>
    <hr>

    {!! Form::model($article, ['method' => 'PATCH' , 'action' => ['GalleryController@update', $article->id ]]) !!}

    @include('gallery.form', ['submitButtonText' => 'Edit Publication'])
    {!! Form::close() !!}

    {!! Form::open([ 'method'  => 'delete', 'route' => [ 'gallery.destroy', $article->id ] ]) !!}
    {!! Form::submit ("Delete Item", ['class' => 'btn btn-primary form-control btn-danger']) !!}
    {!! Form::close() !!}

    @include('errors.list')


@stop