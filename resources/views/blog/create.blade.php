@extends('layouts.app')
 @section('content')
  <div class="container">
        <div class="row">
           <div class="col-md-12 text-center">
            <h1>Create Posts</h1>
           </div>
        </div>
        <hr>
         <br><br>

         <form action="/blog"
          method="POST" enctype="multipart/form-data"
          @csrf
          >
         
         </form>
 
 </div>
   
@endsection