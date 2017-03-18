@extends('app')

@section('content')
<!-- EVENTS -->
<div id="events" class="col s12">
  <div class="fixed-action-btn" tyle="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large waves-effect waves-light red" href="products/create"><i class="material-icons">add</i></a>
  </div>
  <div class="page-title"><h3>Products</h3></div>
  <div>
    <div class="eventTiles">
    <div class="row">
        <div class="section padding">
          @foreach($products as $product)
          <div class="padding col s12 m6 l4 product">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="../uploads/{{$product->image_url}}">
                  <span class="card-title">
                    <time class="date day col-sm-2">{{$product->name}}</time>
                  </span>

                </div>
                <div class="card-content">
                  <p>{{$product->description}}</p>
                </div>
                <div class="card-action">
                  <div class="row">
                    <a href="products/{{$product->id}}/edit/"><i class="material-icons right">edit</i>edit</a>
                  </div>
                  <div class="row">
                    <span class="red-text activator"><i class="material-icons right">delete</i>DELETE</span>
                  </div>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">{{$product->name}}<i class="material-icons right">close</i></span>
                  <p>Delete - are you sure?</p>
                  {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('products.destroy', $product->id))) !!}
                    <button type="submit" class="btn red">DELETE</a>
                  {!! Form::close() !!}
                </div>

              </div>
          </div>
          @endforeach
        </div></div>
      </div>
    </div>
</div>
@endsection
