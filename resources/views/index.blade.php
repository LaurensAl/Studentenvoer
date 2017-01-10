@extends('layouts.app')
@section('title', 'Recipes')
@section('content')


    <div class="container  ">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($posts->isEmpty())
            <p> There is no post.</p>
        @else
            @foreach ($posts as $post)

                <h2 style="font-family: 'Pacifico', cursive;" class=" row col-md-12">{!! $post->title !!}
                </h2>
                {{--<div class="row">--}}
                    <div class="col-md-4">
                        <div><br>
                            <img src="/images/{!! $post->foto !!}"
                                 width="100%">
                        </div>
                    </div>
                    <div>
                        <div class="col-md-8">
                            <h3 style="font-family: 'Pacifico', cursive;">Description:</h3>
                            {!! mb_substr($post->description,0,500) !!}
                            <h6><a href="viewblog/{{$post->id}}">Read more...</a></h6>
                        </div>


                    </div>
                    {{--{{ $post->orderBy('created_at', 'desc')->get()}}--}}
                    @endforeach


                    @endif
                {{--</div>--}}
    </div>
    <div class="col-md-12 text-right">{!! $posts->render() !!}</div>

@endsection
