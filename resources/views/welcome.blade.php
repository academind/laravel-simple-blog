@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <h1 class="text-center">Awesome Posts</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                @foreach($posts as $post)
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="font-size: 28px;">
                            {{ $post->title }}
                        </div>
                        <div class="panel-body">
                            {{ $post->content }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
