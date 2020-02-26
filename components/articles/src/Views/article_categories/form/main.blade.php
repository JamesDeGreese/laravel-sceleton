<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', $model->title ?? '', ['class' => 'form-control']) !!}
    @if($errors->first('title'))
        <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
</div>
