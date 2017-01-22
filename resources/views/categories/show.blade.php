@extends('app')

@section('content')
<!-- EVENTS -->
<div id="events" class="col s12">
  <div class="fixed-action-btn" tyle="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large waves-effect waves-light red" href="categories/create"><i class="material-icons">add</i></a>
  </div>
  <div class="page-title"><h3>Category - {{$category->name}} (#{{$category->id}})</h3></div>
  <div>
    <div class="eventTiles">
    <div class="row">
        <div class="section padding">
          <div class="padding col s12 m6 l4">
              <div class="card hoverable">
                <div class="card-image">
                  <img class="activator" src="../uploads/{{$category->image_url}}">
                  <span class="card-title">
                    <time class="date day col-sm-2">{{$category->name}}</time>
                  </span>

                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">{{$category->name}}<i class="material-icons right">more_vert</i></span>
                  <p>{{$category->description}}</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">{{$category->name}}<i class="material-icons right">close</i></span>
                  <p>{{$category->description}}</p>
                </div>
                </div>

              </div>
              <div class="padding col s12 m6 l8">
              <ul class="collection">

                  @foreach($category->products as $product)
                          <li class="collection-item avatar">
                            <img src="../uploads/{{$product->image_url}}" alt="" class="circle">
                            <span class="title">{{$product->name}}</span>
                            <p>
                              {{$product->description}}
                            </p>
                            <a href="/products/{{$product->id}}" class="secondary-content"><i class="material-icons">border_color</i></a>
                          </li>

                    @endforeach

                    </ul>

              </div>

        </div></div>
      </div>
    </div>
</div>
@endsection
