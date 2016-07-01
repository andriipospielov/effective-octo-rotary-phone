<div class="form-group">
    {!! Form::label('description', 'Description:' ) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control' ]) !!}
</div>


<div class="form-group">
    {!! Form::label('user_file', 'File:' ) !!}


    {!! Form::file('image_url', ['class' => 'form-control' ]) !!}
    <br>



</div>


<div class="form-group">
    {!! Form::submit ("$submitButtonText", ['class' => 'btn btn-primary form-control ']) !!}

</div>