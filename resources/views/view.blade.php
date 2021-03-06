@extends('layouts.app')
@section('title', 'viewblog')
@section('content')
    <div id="contact" class="container">
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
                <div><img style="display: block;
       margin-left: auto;
       margin-right: auto" src="/images/{{$post->foto}}" width="75%"/></div>
            </div>
            <form class="col-md-12">
                <div class="row">
                    <input type="hidden" name="id" id="id" value="{{$post->id}}">
                    <div class="col-md-12 form-group">
                        <h2 class="text-center" style="font-family: 'Pacifico', cursive;"
                            class="col-md-12">{!! $post->title !!}
                        </h2><hr>
                    </div>
                    <div class="col-md-12 form-group"><h3 style="font-family: 'Pacifico', cursive;">Description:</h3>
                         <textarea
                                 style="background:white; border-style: none; border-color: Transparent; overflow: auto;"
                                 class="form-control" id="description" name="description" rows="7"
                                 disabled>{{$post->description}}</textarea>
                    </div>
                    <div class="col-md-6 form-group"><h3 style="font-family: 'Pacifico', cursive;">How to prepare:</h3>
                        <textarea
                                style="background:white; border-style: none; border-color: Transparent; overflow: auto;"
                                class="form-control" id="content" name="content" rows="20"
                                disabled>{{$post->content}}</textarea>
                    </div>
                    <div class="col-md-6 form-group"><h3 style="font-family: 'Pacifico', cursive;">Ingredients:</h3>
                        <textarea
                                style="background:white;border-style: none; border-color: Transparent; overflow: auto;"
                                class="form-control" id="ingredients" name="ingredients"
                                rows="20" disabled>{{$post->ingredients}} </textarea>
                    </div>


                        <div class="col-md-12 form-group">
                        </div>

                </div>
                <div class="col-md-12"><h3 style="font-family: 'Pacifico', cursive;">Comments:</h3><hr></div>
            </form>

            <div class="col-md-12">
                @foreach($post->comment as $comment)
                    <div class="comment col-md-12">
                        <p><strong>Name:<br/></strong>{{ $comment->name }}</p>
                        <p><strong>Comment:<br/></strong>{{ $comment->comment }}</p>
                        <h6 align="right"><strong>created:</strong>{{ $comment->created_at }}</h6>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>

        <h3 class="text-center">Add comment</h3>
        <p class="text-center"><em>Please Fill in!</em></p><br>
        <form class="col-md-12" enctype="multipart/form-data" method="POST" action="/comments"
              id="destroy"> {!! csrf_field() !!}
            <div class="row">{!! csrf_field() !!}
                <div class="col-md-6 form-group"><h4>Name:*</h4>
                    <input class="form-control" id="namecom" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-md-6 form-group"><h4>Email:*</h4>
                    <input class="form-control" id="emailt" name="email" placeholder="Email" type="email"
                           required>
                </div>
                <div class="col-md-12 form-group"><h4>Comments:*</h4>
                    <textarea class="form-control" id="ingredients" name="comment" placeholder="Comment" rows="8"
                              required></textarea><h6>*=required</h6><br>
                </div>
                <div class="col-md-12 form-group">
                    <input type="hidden" name="id" id="id" value="{{$post->id}}">
                    <button class="btn pull-right" type="submit">Comment</button>
                </div>
            </div>
        </form>


    </div>
    </div><br/>
@endsection