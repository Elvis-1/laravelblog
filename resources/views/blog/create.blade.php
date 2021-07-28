@extends('layouts.app')
 @section('content')
  <div class="container">
        <div class="row">
           <div class="col-md-12 text-left">
            <h1>Create Posts</h1>
           </div>
        </div>
        <hr>
         <br><br>

         <form action="/blog"
          method="POST" enctype="multipart/form-data">
          @csrf
          
         <div class="form-group">
         <input class="form-control bg-transparent" type="text" name="title" placeholder="Title">
         </div>
         <div class="form-group">
         <textarea class="form-control" name="description" type="text" placeholder="description">
         </textarea>
         </div>
         <div class="form-group">
         <label class="uppercase rounded">
         <span>Select a file</span>
         <input type="file" class="hidden bg-transparent" name="image">
         </label>
         </div>
         <button  type ="submit" class=" text-lg btn btn-primary br-rounded" style="border-radius:20px;">
         Submit Post
         </button>
         </form>
 
 </div>
   
@endsection