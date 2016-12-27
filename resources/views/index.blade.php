@extends('layouts.app')
@section('title', 'Recepten')
@section('content')
    {!! $posts->render() !!}
    <div class="container col-md-8 col-md-offset-2">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($posts->isEmpty())
            <p> There is no post.</p>
        @else
            @foreach ($posts as $post)
                    <h2 class="col-md-12">{!! $post->title !!}
                    </h2>
                    <div class="col-md-4">
                        <img src="{!! $post->foto !!}" style="width:300px; height:300px;  top:300px; left:300px; border-radius:50%">
                    </div>

                    <div class="col-md-4">
                        <h3>How to prepare:</h3>
                        {!! mb_substr($post->content,0,500) !!}
                    </div>
                    <div class="col-md-4">
                    <h3>Ingredients:</h3>

                        {!! mb_substr($post->ingredients,0,500) !!}
                    </div>

            @endforeach

        @endif
    </div>


@endsection
