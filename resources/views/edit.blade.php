@extends('layouts.app')
@section('title', 'viewblog')

@section('content')
    <div id="contact" class="container">
        <h3 class="text-center">View the recipe</h3>
        <p class="text-center"><em>Enjoy reading!</em></p><br>

        <div class="row"> {!! csrf_field() !!}
            <div class="col-md-12">
                <div class="form-group">
                    <div><img src="/images/{{$post->foto}}" width="100%"/></div>
                    <label for="foto">Choose an image</label>
                    <input type="file" name="foto" value="">
                </div>
            </div>

            <form enctype="multipart/form-data" class="col-md-12" method="POST" action="/update"
                  id="updateblog"> {!! csrf_field() !!}
                <div class="row">
                    <input type="hidden" name="id" id="id" value="{{$post->id}}">
                    <div class="col-md-12 form-group"><h3>Recipe:</h3>
                        <input disabled style="background:white; border-style: none; border-color: Transparent; overflow: auto;" class="form-control" id="title" name="title" type="text" value="{{$post->title}}" required>
                    </div>
                    <div class="col-md-6 form-group"><h3>How to prepare:</h3>
                        <textarea disabled style="background:white; border-style: none; border-color: Transparent; overflow: auto;" class="form-control" id="content" name="content" rows="30">{{$post->content}}</textarea>
                    </div>
                    <div class="col-md-6 form-group"><h3>Ingredients:</h3>
                        <textarea disabled style="background:white;border-style: none; border-color: Transparent; overflow: auto;" class="form-control" id="ingredients" name="ingredients"  rows="30">{{$post->ingredients}} </textarea>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn pull-right" type="submit">Upload</button>
                        </div>
                    </div>
                </div>
            </form>

@endsection