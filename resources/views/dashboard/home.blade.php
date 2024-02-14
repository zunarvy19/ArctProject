@extends('layouts.sidebarAdmin')

@section('content')
<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
  <h1 class="text-start h2 mt-2">Welcome back,  <span class="fw-semibold">{{ Auth::user()->name }}</span></h1>
</main>
@endsection
