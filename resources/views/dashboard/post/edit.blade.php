@extends('layouts.sidebarAdmin')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <p class="my-2 h3 border-bottom fw-semibold">Update Post</p>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="col-lg-8">
            <form method="POST" action="/dashboard/post/{{$post->slug}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $post->title)}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                </div>
                <div class="mb-3"> 
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="contoh-contoh-contoh" value="{{old('slug', $post->slug)}}">
                @error('slug')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="hidden" name="oldImage" value="{{$post->image}}">
                    @if($post->image)
                    <img src="{{asset('storage/' . $post->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    @error('body')
                        <p class="text-danger">
                            {{$message}}
                        </p>
                    @enderror
                    <input type="hidden" id="body" name="body" value="{{old('body', $post->body)}}">
                    <trix-editor input="body"></trix-editor>
                @error('body')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">Update Post</button>
            </form>
        </div>
    </main>

    {{-- title to sluggable --}}
<script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', async function() {
        const res = await fetch(`/dashboard/post/slug?${
            new URLSearchParams({title: this.value})
            .toString()
        }`);
        const data = await res.json();
        slug.value = data.slug;
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection