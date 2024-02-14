@extends('layouts.sidebarAdmin')

@section('content')
<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
<h1 class="h2 fw-bolder border-bottom">My Post</h1>

<div class="table-responsive">
    <div class="d-flex justify-content-end">
        <a href="/dashboard/post/create" class="btn btn-primary my-2">Create</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <table class="table table-striped table-sm">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Slug</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataPost as $post)
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$post -> title }}</td>
            <td>{{$post -> slug }}</td>
            <td>
                <a href="/dashboard/post/{{$post->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/post/{{$post->slug}}/edit" class="badge bg-warning"><span data-feather="edit-2"></span></a>
                <form id="deleteForm" action="/dashboard/post/{{$post->slug}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button id="deleteButton" class="badge bg-danger border-0"><span data-feather="trash-2"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>
    // Menangani klik tombol hapus
    document.getElementById('deleteButton').onclick = function(event) {
        // Mencegah pengiriman formulir secara otomatis
        event.preventDefault();

        // Tampilkan konfirmasi SweetAlert
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin menghapus?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            // Jika pengguna mengonfirmasi
            if (result.isConfirmed) {
                // Kirim formulir penghapusan
                document.getElementById('deleteForm').submit();
            }
        });
    };
</script>
</main>
@endsection