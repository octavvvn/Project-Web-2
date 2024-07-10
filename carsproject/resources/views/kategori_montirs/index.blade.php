@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Kategori Montir</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Kategori Montir</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kategori Montir</h3>
                    <div class="card-tools">
                        <a href="{{ route('kategori-montirs.create') }}" class="btn btn-primary">Tambah Kategori Montir</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoriMontirs as $kategoriMontir)
                                <tr>
                                    <td>{{ $kategoriMontir->id }}</td>
                                    <td>{{ $kategoriMontir->nama }}</td>
                                    <td>
                                        <a href="{{ route('kategori-montirs.show', $kategoriMontir->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('kategori-montirs.edit', $kategoriMontir->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('kategori-montirs.destroy', $kategoriMontir->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('layouts.footer')
