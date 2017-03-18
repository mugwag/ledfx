@extends('app')

@section('content')
    <!-- META -->
    <h2>Homepage image</h2>
    <div class="parallax_image valign-wrapper">
      @if(!empty($homepage_image))
        <img src="/uploads/{{$homepage_image->value}}">
      @else
        <span class="valign">no image</span>
      @endif
    </div>

    {!! Form::model($homepage_image, ['route' => ['site.homepage_image_update', $homepage_image->id], 'id' => 'myForm', 'files'=>true]) !!}

    <div class="form-group">
    {!! Form::label('Update Image') !!}
    <div class="file-field input-field">

      <div class="btn">
                         <span>Browse</span>
                         {!! Form::file('image') !!}
                      </div>


            <div class="file-path-wrapper">
                         {!! Form::text('homepage_image', '', array('placeholder'=>'Upload file', 'class'=>'file-path validate')) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit('Change Image', array('class' => 'btn float_right')) !!}
    </div>

    <h2>Site text</h2>
    <ul>
      @foreach($text as $text_item)
      <li>
        <div class="col l6 m6 s12">{{$text_item->description}}</div>
        <div class="col l6 m6 s12">{{$text_item->text}}</div>
      </li>
    </ul>
    @endforeach
@endsection
