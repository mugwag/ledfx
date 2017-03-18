@extends('app')

@section('content')
    <!-- PRODUCTS -->
    <h2>Edit product</h2>
    {!! Form::model($product, ['route' => ['products.update', $product->id], 'id' => 'myForm', 'files'=>true]) !!}
        @include('products/partials/_products', ['submit_text' => 'Edit Product'])
    {!! Form::close() !!}

@endsection
