@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Montir</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('montirs.index') }}">Daftar Montir</a></li>
                            <li class="breadcrumb-item active">Detail Montir</li>
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
                                <td>{{ $montir->id }}</td>
                            </tr>
                            <tr>
                                <th>Kode</th>
                                <td>{{ $montir->kode }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $montir->nama }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $montir->gender }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $montir->tgl_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $montir->tmp_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Keahlian</th>
                                <td>{{ $montir->keahlian }}</td>
                            </tr>
                            <tr>
                                <th>Kategori Montir</th>
                                <td>{{ $montir->kategoriMontir->nama }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('montirs.index') }}" class="btn btn-primary">Kembali ke Daftar Montir</a>
                </div>
            </div>
        </section>
    </div>
</div>
@include('layouts.footer')
