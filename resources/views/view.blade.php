@extends('layouts.app')
@section('title', 'viewblog')
@section('content')
    <div id="contact" class="container" >
        <h3 class="text-center">View the recipe</h3>
        <p class="text-center"><em>Enjoy reading, preparing and eating!</em></p>
        <hr>
        @if (Auth::user())
            <a href="editblog/{{$post->id}}">
                <button class="btn pull-right">Edit</button>
            </a>
        @endif
        <div class="row"> {!! csrf_field() !!}
            <div class="col-md-12">
                <div><img src="/images/{{$post->foto}}" width="100%"/></div>
            </div>
            <for class="col-md-12">
                <div class="row">
                    <input type="hidden" name="id" id="id" value="{{$post->id}}">
                    <div class="col-md-12 form-group">
                        <h2 class="text-center" style="font-family: 'Pacifico', cursive;"
                            class="col-md-12">{!! $post->title !!}
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <h3 style="font-family: 'Pacifico', cursive;">How to prepare:</h3>
                        {!! $post->content !!}

                    </div>
                    <div class="col-md-6">
                        <h3 style="font-family: 'Pacifico', cursive;">Ingredients:</h3>
                        {{$post->ingredients}}
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 form-group">
                        </div>
                    </div>
                </div>
                <hr>
            </for>

            <h3 class="text-center">Add comment</h3>
            <p class="text-center"><em>Please Fill in!</em></p><br>

            <form class="col-md-12" enctype="multipart/form-data" method="POST" action="/addcomment"
                  id="addcomment">

                <div class="row">{!! csrf_field() !!}
                    <div class="col-md-6 form-group"><h4>Name:*</h4>
                        <input class="form-control" id="namecom" name="namecom" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-md-6 form-group"><h4>Email:*</h4>
                        <input class="form-control" id="emailt" name="email" placeholder="email" type="email"
                               required>
                    </div>
                    <div class="col-md-12 form-group"><h4>Comments:</h4>
                        <textarea class="form-control" id="ingredients" name="comments" placeholder="Comments" rows="10"
                                  required></textarea>
                    </div>
                    <br><h6>*=required</h6>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn pull-right" type="submit">Upload</button>
                        </div>
                    </div>
                </div>
            </form>
@endsection