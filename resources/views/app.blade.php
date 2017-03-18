<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link type="text/css" rel="stylesheet" href="/bower_components/materialize/dist/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="/css/styles.css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js"></script>

        <title>LedFX</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      @include('nav')



      <div>


                <div class="container">

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


                    @yield('content')
                </div>

    </body>
</html>

<!-- Angular Material Dependencies -->
<!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/bower_components/materialize/dist/js/materialize.min.js"></script>

<script src="/bower_components/angular/angular.js"></script>
<script src="/bower_components/angular-material-icons/angular-material-icons.js"></script>
