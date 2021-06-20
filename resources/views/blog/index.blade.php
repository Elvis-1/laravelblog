@extends('layouts.app')
 @section('content')
  <div class="container">
        <div class="row">
           <div class="col-md-12 text-center">
            <h1>Blog Posts</h1>
           </div>
        </div>
        <hr>
        @if(Auth::check())
         <p style="text-align:left; "><a class="btn btn-primary br-rounded" style="border-radius:20px;" href="/blog/create">Create Post</a></p>
         @endif
         <br><br>
  @foreach($posts as $post)
   <div class="container">
    <div class="row">
    <div class="col-md-4">
     <img style="width:100%" src="image/EL.jpg">
     </div>

     <div class="col-md-8">
        <div class="" style="text-align:center; margin:50px">
        <h1 class="" style="text-align:left; font-weight:bold">{{$post->title}}</h1>
        <p style="text-align:left"><small>By <b>{{$post->user->name}} - <i>IFNOTGOD</i></b></small>,Create on {{date('jS M Y',strtotime($post->updatedd_at))}}.</p>
        <p style="text-align:left;">{{$post->description}}</p>

        <div class="">
        <p  class="" style="text-align:left; font-weight:bold">Explore our site for amazing contents and stop Struggling as a developer</p>
        <p style="text-align:left; "><a class="btn btn-primary br-rounded" style="border-radius:20px; font-size:20px" href="/blog/{{$post->slug}}">Keep Reading</a></p>
        </div>
        </div>
     </div>
    </div>
    @endforeach
 </div>
   
@endsection