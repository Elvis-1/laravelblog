@extends('layouts.app')
 @section('content')
  <div class="container">
        <div class="row">
           <div class="col-md-12 text-left">
            <h1>Update Posts</h1>
           </div>
        </div>
        <hr>
         <br><br>

         <form action="/blog/{{$post->slug}}"
          method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          
         <div class="form-group">
         <input class="form-control bg-transparent" type="text" name="title" value="{{$post->title}}">
         </div>
         <div class="form-group">
         <textarea class="form-control" name="description" type="text" placeholder="description">
           {{$post->description}}  </textarea>
         </div>
        
         <button  type ="submit" class=" text-lg btn btn-primary br-rounded" style="border-radius:20px;">
         Submit Post
         </button>
         </form>
 
 </div>
   
@endsection