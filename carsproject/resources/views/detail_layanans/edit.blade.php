@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Detail Layanan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Detail Layanan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('detail-layanans.update', $detailLayanan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" value="{{ $detailLayanan->pekerjaan }}" required>
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya</label>
                            <input type="number" name="biaya" class="form-control" value="{{ $detailLayanan->biaya }}" required>
                        </div>
                        <div class="form-group">
                            <label for="layanan_id">Layanan</label>
                            <select name="layanan_id" class="form-control" required>
                                @foreach ($layanans as $layanan)
                                    <option value="{{ $layanan->id }}" {{ $detailLayanan->layanan_id == $layanan->id ? 'selected' : '' }}>{{ $layanan->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pj_montir_id">Montir</label>
                            <select name="pj_montir_id" class="form-control" required>
                                @foreach ($montirs as $montir)
                                    <option value="{{ $montir->id }}" {{ $detailLayanan->pj_montir_id == $montir->id ? 'selected' : '' }}>{{ $montir->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@include('layouts.footer')
