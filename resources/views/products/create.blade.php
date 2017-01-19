@extends('app')

@section('content')
    <!-- PRODUCTS -->
    <h2>Create new product</h2>
    {!! Form::model(new App\Products, ['route' => ['products.store'], 'id' => 'myForm', 'files'=>true]) !!}
        @include('products/partials/_products', ['submit_text' => 'Create Product'])
    {!! Form::close() !!}

@endsection
