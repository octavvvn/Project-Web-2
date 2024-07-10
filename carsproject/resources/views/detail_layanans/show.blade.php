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
                            <li class="breadcrumb-item"><a href="{{ route('detail-layanans.index') }}">Daftar Detail Layanan</a></li>
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
                                <td>{{ $detailLayanan->id }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>{{ $detailLayanan->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <th>Biaya</th>
                                <td>{{ $detailLayanan->biaya }}</td>
                            </tr>
                            <tr>
                                <th>Layanan</th>
                                <td>{{ $detailLayanan->layanan->nama }}</td>
                            </tr>
                            <tr>
                                <th>Montir</th>
                                <td>{{ $detailLayanan->montir->nama }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('detail-layanans.index') }}" class="btn btn-primary">Kembali ke Daftar Detail Layanan</a>
                </div>
            </div>
        </section>
    </div>
</div>

@include('layouts.footer')
