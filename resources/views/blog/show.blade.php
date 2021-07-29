@extends('layouts.app')
 @section('content')
  <div class="container">
        <div class="row">
           <div class="col-md-12 text-left">
            <h1>{{$post->title}}</h1>
           </div>
        </div>
        <hr>
        
<div class="col-md-8">
        <div class="" style="text-align:center; margin:50px">
        <h1 class="" style="text-align:left; font-weight:bold">{{$post->title}}</h1>
        <p style="text-align:left"><small>By <b>{{$post->user->name}} - <i>IFNOTGOD</i></b></small>,Create on {{date('jS M Y',strtotime($post->updated_at))}}.</p>
        <p style="text-align:left;">{{$post->description}}</p>

       
        </div>
     </div>
    </div>
        
 
 </div>
   
@endsection