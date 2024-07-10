@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Detail Layanan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Detail Layanan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Layanan</h3>
                    <div class="card-tools">
                        <a href="{{ route('detail-layanans.create') }}" class="btn btn-primary">Tambah Detail Layanan</a>
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
                                <th>Pekerjaan</th>
                                <th>Biaya</th>
                                <th>Layanan</th>
                                <th>Montir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detailLayanans as $detailLayanan)
                                <tr>
                                    <td>{{ $detailLayanan->id }}</td>
                                    <td>{{ $detailLayanan->pekerjaan }}</td>
                                    <td>{{ $detailLayanan->biaya }}</td>
                                    <td>{{ $detailLayanan->layanan->nama }}</td>
                                    <td>{{ $detailLayanan->montir->nama }}</td>
                                    <td>
                                        <a href="{{ route('detail-layanans.show', $detailLayanan->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('detail-layanans.edit', $detailLayanan->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('detail-layanans.destroy', $detailLayanan->id) }}" method="POST" style="display:inline-block;">
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
