@extends('index')

@section('body')
    {{-- <h1>Hello : {{ auth()->user()->username }}</h1>  --}}

    <div class="container-data">

        {{-- Jika berhasil tambah data maka muncul pesan ini --}}

        @if (session('berhasil'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('berhasil') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row">
            {{-- sisi kiri --}}
            <div class="col-6">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Author</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $berita)
                            <tr>
                                <td>{{ $berita->judul }}</td>
                                <td>{{ $berita->deskripsi }}</td>
                                <td>{{ $berita->author }}</td>
                                <td>
                                    <button type="button" class="btn btn-danger">Hapus Data</button>
                                    <button type="button" class="btn btn-warning">Edit Data</button>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            {{-- sisi kanan --}}
            <div class="col-6">
                <form action="/tambah" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="foto">Tambah Foto</label>
                        <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*">
                    </div>

                    <div class="form-group">
                        <label for="judul">Masukkan Judul</label>
                        <input type="judul" class="form-control @error('judul') is-invalid @enderror" name='judul'>

                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Masukkan Deskripsi</label>
                        <textarea type="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror " name='deskripsi'
                            style="height: 100px"></textarea>

                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <div class="form-group">
                        <label for="author">Nama Author</label>
                        <input type="author" class="form-control @error('author') is-invalid @enderror" name='author'>

                        @error('author')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>
            </div>
        </div>

    </div>
@endsection
