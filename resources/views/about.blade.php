@extends('layouts.app')
 @section('title', 'About')

 @section('content')
     <div id="band" class="container text-center">
         <h3>Laurens Albers</h3>
         <p><em>My First Laravel Blog!</em></p>
         <p>This project called Studentenvoer has been created by me (Laurens Albers). The website is a result of a schoolproject where the student has to create a (recipes)blog using Laravel. I had a lot of fun using different kinds of tools to make this project a reality. Following this text you can find a bit of information about me and the things i like. Feel free to contact me using the contact page for any questions or suggestions you might have.</p>
         <br>
         <div class="row">
             <div class="col-sm-4">
                 <p class="text-center"><strong>Laurens Albers</strong></p><br>
                 <a href="" data-toggle="collapse">
                     <img src="aboutMe/Laurens.jpg" class="img-circle" alt="Random Name" width="255" height="255">
                 </a>
                 <div>
                     <br>
                     <p>Loves technology</p>
                     <p>Responsible for Studentenvoer</p>
                     <p>Born 23-09-1987</p>
                 </div>
             </div>
             <div class="col-sm-4">
                 <p class="text-center"><strong>One Piece</strong></p><br>
                 <a href="" data-toggle="collapse">
                     <img src="AboutMe/luffys.jpg" class="img-circle" alt="Random Name" width="255" height="255">
                 </a>
                 <div>
                     <br>
                     <p>Anime & best selling manga-series in history</p>
                     <p>Written by Eiichiro Oda</p>
                     <p>Created 19 juli 1997</p>
                 </div>
             </div>

             <div class="col-sm-4">
                 <p class="text-center"><strong>Videogames</strong></p><br>
                 <a href="" data-toggle="collapse">
                     <img src="AboutMe/videos.jpg" class="img-circle" alt="Random Name" width="255" height="255">
                 </a>
                 <div>
                     <br>
                     <p>Love 4 PC & PlayStation</p>
                     <p>Action & Adventure </p>
                     <p>Playing since 1993</p>
                 </div>
             </div>
         </div>
     </div>

 @endsection
