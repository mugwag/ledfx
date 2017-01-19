@extends('app')

@section('content')
        <div class="flex-center position-ref full-height">

          <main>
<center>
  <h2>LedFx</h2>
  <!-- <div class="section"></div> -->
  <div>
  @if (Session::has('message'))


                <div class="flash alert-info">
                     <p>{{ Session::get('message') }}</p>
                </div>
            @endif


            @if ($errors->any())
            <div class="alert alert-danger">
                <div class='flash alert-danger'>
                    @foreach ( $errors->all() as $error )
                      <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
    @endif
  </div>

  <h5 class="indigo-text">Please, login into your account</h5>
  <div class="section"></div>

  <div class="container">
    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

      <form class="col s12" method="post" action="/auth/login">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class='row'>
          <div class='col s12'>
          </div>
        </div>

        <div class='row'>
          <div class='input-field col s12'>
            <input id="email" type="email" class="validate">
            <label for="email" data-error="Not a valid email address">Email</label>
          </div>
        </div>

        <div class='row'>
          <div class='input-field col s12'>
            <input class='validate' type='password' name='password' id='password' />
            <label for='password'>Enter your password</label>
          </div>
          <label style='float: right;'>
            <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
          </label>
        </div>

        <br />
        <center>
          <div class='row'>
            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
          </div>
        </center>
      </form>
    </div>
  </div>
  <!-- <a href="#!">Create account</a> -->
</center>

<div class="section"></div>
<div class="section"></div>
</main>
        </div>
@endsection
