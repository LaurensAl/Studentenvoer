@extends('layouts.app')

 @section('content')

     <div class="container spark-screen">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="panel panel-default">

                     <div class="panel-heading">Dashboard</div>

                     <div class="panel-body">

                         <form method="POST" action="/upload" enctype="multipart/form15 -data">

                             @foreach ($errors->all() as $error)
                                 <p class="alert alert-danger">{{ $error }}</p>
                                 @endforeach

                             @if (session('status'))
                                 <div class="alert alert-success">
                                     {{ session('status') }}
                                     </div>
                                 @endif

                             {!! csrf_field() !!}

                             <div class="form-group">
                                 <label for="image">Choose an image</label>
                                 <input type="file" id="image" name="image">
                                 </div>

                             <button type="submit" class="btn btn-default">Upload</button>

                                Chapter 1: Back End Recipes 53
                                 </form>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     @endsection