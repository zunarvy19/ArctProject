@extends('layouts.sidebarAdmin')

@section('content')
<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
  <div class="container" style="">
    <div class="row my-5">
      <div class="col-lg-8">
        <h1 class="mb-3">{{$post->title}}</h1>

        @if ($post->image)
          <div style="max-height: 350px; overflow:hidden">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->slug}}" class="img-fluid mt-3">
          </div>
        @else
        <img src="https:/source.unsplash.com/1200x400" alt="{{$post->slug}}" class="img-fluid mt-3">
        @endif
        
        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>

        <a href="/dashboard/post">Back</a>
      </div>
    </div>
  </div>
</main>
@endsection