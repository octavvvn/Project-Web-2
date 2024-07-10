@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Layanan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('layanans.index') }}">Daftar Layanan</a></li>
                            <li class="breadcrumb-item active">Detail Layanan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $layanan->id }}</td>
                            </tr>
                            <tr>
                                <th>Kode</th>
                                <td>{{ $layanan->kode }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $layanan->nama }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{ $layanan->deskripsi }}</td>
                            </tr>
                            <tr>
                                <th>Total Biaya</th>
                                <td>{{ $layanan->total_biaya }}</td>
                            </tr>
                            <tr>
                                <th>Rating</th>
                                <td>{{ $layanan->rating }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('layanans.index') }}" class="btn btn-primary">Kembali ke Daftar Layanan</a>
                </div>
            </div>
        </section>
    </div>
</div>

@include('layouts.footer')
