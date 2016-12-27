@extends('layouts.app')
 @section('title', 'Contact')

 @section('content')
     <div id="contact" class="container">
         <h3 class="text-center">Contact</h3>
         <p class="text-center"><em>Laurens Albers</em></p><br>

         <div class="row">
             <div class="col-md-4">
                 <p>Feel Free to contact me!</p>
                 <p><span class="glyphicon glyphicon-map-marker">&nbsp;</span>Almere, NL</p>
                 <p><span class="glyphicon glyphicon-phone">&nbsp;</span>Phone: +31 681449595</p>
                 <p><span class="glyphicon glyphicon-envelope">&nbsp;</span>Email: Clipsedesign@gmail.com</p>
             </div>
             <div class="col-md-8">
                 <div class="row">
                     <div class="col-sm-6 form-group">
                         <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                     </div>
                     <div class="col-sm-6 form-group">
                         <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                     </div>
                 </div>
                 <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="10"></textarea>
                 <br>
                 <div class="row">
                     <div class="col-md-12 form-group">
                         <button class="btn pull-right" type="submit">Send</button>
                     </div>
                 </div>
             </div>
         </div>
     @endsection
