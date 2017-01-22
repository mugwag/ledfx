@extends('app')

@section('content')
    <!-- PRODUCTS -->
    <h2>Create new category</h2>
    {!! Form::model(new App\Categories, ['route' => ['categories.store'], 'id' => 'myForm', 'files'=>true]) !!}
        @include('categories/partials/_categories', ['submit_text' => 'Create Category'])
    {!! Form::close() !!}

@endsection
