{{--@extends('layouts.app')--}}

 {{--@section('content')--}}

     {{--<div class="container spark-screen">--}}
         {{--<div class="row">--}}
             {{--<div class="col-md-10 col-md-offset-1">--}}
                 {{--<div class="panel panel-default">--}}

                     {{--<div class="panel-heading">Dashboard</div>--}}
                     {{--<div><img src="/images/banner.jpg" width="100%"/></div>--}}

                     {{--<div class="panel-body">--}}

                         {{--<form method="POST" action="recepten" enctype="multipart/form-data">--}}

                             {{--@foreach ($errors->all() as $error)--}}
                                 {{--<p class="alert alert-danger">{{ $error }}</p>--}}
                                 {{--@endforeach--}}

                             {{--@if (session('status'))--}}
                                 {{--<div class="alert alert-success">--}}
                                         {{--{{ session('status') }}--}}
                                     {{--</div>--}}
                                 {{--@endif--}}

                             {{--{!! csrf_field() !!}--}}

                             {{--<div class="form-group">--}}
                                 {{--<label for="banner">Choose an image</label>--}}
                                 {{--<input type="file" name="banner">--}}
                                 {{--</div>--}}

                             {{--<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-cloud-upload">&nbsp</span>Upload</button>--}}

                             {{--</form>--}}

                         {{--</div>--}}
                     {{--</div>--}}
                 {{--</div>--}}
             {{--</div>--}}
         {{--</div>--}}
     {{--@endsection--}}