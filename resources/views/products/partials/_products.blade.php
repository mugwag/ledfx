<div class="form-group">
    {!! Form::label('Product Name') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! Form::label('Description') !!}
    {!! Form::text('description') !!}
</div>

<div class="form_image valign-wrapper">
  @if(!empty($product))
    <img src="/uploads/{{$product->image_url}}">
  @else
    <span class="valign">no image</span>
  @endif
</div>

<div class="form-group">
{!! Form::label('Image') !!}
<div class="file-field input-field">

  <div class="btn">
                     <span>Browse</span>
                     {!! Form::file('image') !!}
                  </div>


        <div class="file-path-wrapper">
                     {!! Form::text('image_url', '', array('placeholder'=>'Upload file', 'class'=>'file-path validate')) !!}
                  </div>
    </div>
</div>

<div class="form-group">
    {!! Form::submit($submit_text, array('class' => 'btn float_right')) !!}
</div>
