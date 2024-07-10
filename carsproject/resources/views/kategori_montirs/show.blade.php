@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Kategori Montir</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('kategori-montirs.index') }}">Kategori Montir</a></li>
                            <li class="breadcrumb-item active">Detail Kategori Montir</li>
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
                                <td>{{ $kategoriMontir->id }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $kategoriMontir->nama }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('kategori-montirs.index') }}" class="btn btn-primary">Kembali ke Daftar Kategori Montir</a>
                </div>
            </div>
        </section>
    </div>
</div>
@include('layouts.footer')
