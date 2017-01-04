@extends('layouts.app')
@section('title', 'AddBlog')

@section('content')
    <div id="contact" class="container">
        <h3 class="text-center">Add Recipe</h3>
        <p class="text-center"><em>Create a new Recipe!</em></p><br>
        <form enctype="multipart/form-data" class="col-md-12" method="POST" action="/addblog" id="addblog">
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            {!! csrf_field() !!}
            <div class="col-md-4">

                <div class="form-group">
                    <label for="foto">Choose an image</label>
                    <input type="file" name="foto" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input class="form-control" id="title" name="title" placeholder="Title" type="text" required>
                </div>
                <div class="col-md-12 form-group">
                    <textarea class="form-control" id="description" name="description" placeholder="description"
                              rows="7" required></textarea>
                </div>
                <div class="col-md-6 form-group">
                        <textarea class="form-control" id="content" name="content" placeholder="content"
                                  rows="20" required></textarea>
                </div>
                <div class="col-md-6 form-group">
                        <textarea class="form-control" id="ingredients" name="ingredients" placeholder="Add Ingredients"
                                  rows="20" required></textarea>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Add Recipe</button>
                    </div>
                </div>
            </div>
        </form>

@endsection