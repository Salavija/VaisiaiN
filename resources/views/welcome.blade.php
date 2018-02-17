@extends('layouts.default')
@section('content')

<body class="text-center" style="background: url("includes/img/vaisiai.jpg")">
<div id="content" class="col-md-8">
    <div class="bg">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </div>
        @endif
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
            <main role="main" class="inner cover">
            <div class="title m-b-md">
            Vaisių Krepšeliai
            </div>
            <p class="lead">Pati geriausia dovana</p>
            <p class="links">
            <form action="{{ route('product.index') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
            <button type="submit" class="btn btn-light">Rinktis</button>
            </form>
                </main>
        </div>
        </div>
    </div>
</div>

@stop
