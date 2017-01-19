<div class="form-group">
    {!! Form::label('Product Name') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! Form::label('Description') !!}
    {!! Form::text('description') !!}
</div>

{!! Form::label('Image') !!}
<div class="file-field input-field">

  <div class="btn">
                     <span>Browse</span>
                     {!! Form::file('image') !!}
                  </div>
    <div class="form-group">

        <div class="file-path-wrapper">
                     {!! Form::text('image_url', '', array('placeholder'=>'Upload file', 'class'=>'file-path validate')) !!}
                  </div>
    </div>
</div>

<div class="form-group">
    {!! Form::submit($submit_text, array('class' => 'btn')) !!}
</div>
