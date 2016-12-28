@extends('layouts.app')
@section('title', 'AddBlog')

@section('content')
    <div id="contact" class="container">
        <h3 class="text-center">Add Recipe</h3>
        <p class="text-center"><em>Please Fill in!</em></p><br>

        <form enctype="multipart/form-data" class="col-md-8" method="POST" action="/addblog"
                                 id="addblog" >
            <div class="col-md-4">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="foto">Choose an image</label>
                    <input type="file" name="foto" required>
                </div>
            </div>

                <div class="row">
                    <div class="col-sm-10 form-group">
                        <input class="form-control" id="title" name="title" placeholder="Title" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <textarea class="form-control" id="content" name="content" placeholder="content"
                                  required></textarea>
                    </div>
                    <div class="col-sm-6 form-group">
                        <textarea class="form-control" id="ingredients" name="ingredients" placeholder="Add Ingredients"
                                  required></textarea>
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