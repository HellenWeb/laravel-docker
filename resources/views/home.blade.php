@extends('layouts.app')

@section('name') Home @endsection

@section('content')
    <div class="intro">
        <div class="intro__inner text-center">
            <img style="width: 30%" src="https://www.docker.com/wp-content/uploads/2022/03/horizontal-logo-monochromatic-white.png">
            <h2 class="m-4"><a style="text-decoration: none; color: white" class="main-title">Laravel<a> Server</h2>
            <p class="mt-3", style="opacity: .5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nobis consequatur quis?
            </p>
            <a href="https://github.com/HellenWeb"><button type="button" class="btn btn-secondary">Github</button><a>
        </div>
    </div>
@endsection