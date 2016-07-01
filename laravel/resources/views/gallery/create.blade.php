@extends ('app')

@section('content')
    <h1>Add a new Article <a href="{{action('GalleryController@index')}}">(back to list)</a></h1>

    <hr>
    {!! Form::open([
           'url' => 'gallery',
            'files' => true
            ])!!}

    @include('gallery.form', ['submitButtonText' =>'Add Article'])


    {!! Form::close() !!}

    @include('errors.list')
@stop

