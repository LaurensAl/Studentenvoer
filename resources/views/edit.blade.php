@extends('layouts.app')
@section('title', 'editblog')
@section('content')
    <div id="contact" class="container">
        <h3 class="text-center">View the recipe</h3>

        <p class="text-center"><em>Entered editing version</em></p><hr>
        <a href="/viewblog/{{$post->id}}">
            <button class="btn pull-right">Return</button>
        </a>
        <div class="row"> {!! csrf_field() !!}
            <div class="col-md-12">
                <div class="form-group">
                    <div><img style="display: block;
    margin-left: auto;
    margin-right: auto" src="/images/{{$post->foto}}" width="75%"/></div>
                    <label for="foto">Choose an image</label>
                    <input type="file" name="foto" value="">
                </div>
            </div>

            <form enctype="multipart/form-data" class="col-md-12" method="POST" action="/viewblog/editblog"
                  id="editblogupdate"> {!! csrf_field() !!}
                <div class="row">
                    <input type="hidden" name="id" id="id" value="{{$post->id}}">
                    <div class="col-md-12 form-group"><h3>Recipe:</h3>
                        <input  style="background:white; border-style: none; border-color: Transparent; overflow: auto;" class="form-control" id="title" name="title" type="text" value="{{$post->title}}" required>
                    </div>
                    <div class="col-md-6 form-group"><h3>How to prepare:</h3>
                        <textarea  style="background:white; border-style: none; border-color: Transparent; overflow: auto;" class="form-control" id="content" name="content" rows="25">{{$post->content}}</textarea>
                    </div>
                    <div class="col-md-6 form-group"><h3>Ingredients:</h3>
                        <textarea  style="background:white;border-style: none; border-color: Transparent; overflow: auto;" class="form-control" id="ingredients" name="ingredients"  rows="25">{{$post->ingredients}} </textarea>
                    </div>

                    <div class="row"><
                        <div class="col-md-12 form-group">
                           <hr> <button class="btn btn-success pull-right" type="submit">Update</button>

                            <form enctype="multipart/form-data" action="/viewblog/editblog/delete" method="POST">
                                <input type="hidden" name="id" value="{{ $post->id }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Delete Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>

@endsection