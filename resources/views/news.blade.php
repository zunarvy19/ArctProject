@extends('layouts.main')

@section('main')
<div class="container" style="margin-top: 5%">
  <div class=>
    <div class="">
      <h1 class="text-center text-capitalize fw-semibold mb-3">{{$post->title}}</h1>
      
      <div class="d-flex align-items-center justify-content-center"> 
        @if ($post->image)
          <div class="">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->slug}}" class="img-fluid mt-3 ">
          </div>
        @else
          <img src="https:/source.unsplash.com/1200x400" alt="{{$post->slug}}" class="img-fluid mt-3">
        @endif
      </div> 
      <article class="my-3 fs-5 text-start mt-5"> 
        {!! $post->body !!}
      </article>
      
      <a href="/" class=" text-start mb-5 btn btn-primary" > <span data-feather="arrow-left"></span>Back</a> 
    </div>
  </div>
</div>
@endsection