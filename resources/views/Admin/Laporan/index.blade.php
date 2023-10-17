@extends('Admin.Layout.index')
@section('title', 'Laporan')
@section('content')


<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
                <form method="POST" action="{{ route('laporandata') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="form-control-label">Tanggal Awal:</label>
                            <input type="date" class="form-control" name="start_date">
                          </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                              <label class="form-control-label">Tanggal Akhir:</label>
                              <input type="date" class="form-control" name="end_date">
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group" style="margin-top: 31px;">
                                <button type="submit"  class="btn btn-primary">Cari</button>
                            </div>
                        </div>

                    </div>

                </form>
            </h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <div class="container mt-2">
                    {{-- <table id="example" class="table align-items-center mb-0"> --}}
                    <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Laporan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tipe</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lokasi</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Pelapor</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Teknisi</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kegiatan Perbaikan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pihak Terlibat</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Biaya</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $no = 1;
                              $nourut = 1;
                          @endphp
                          @foreach ($laporans as $data)
                          <tr class="text-xs font-weight-bold mb-0">
                            <td>{{ $no++ }}</td>
                            <td>{{ date('Y.m.d', strtotime($data->tanggal))}}.00{{ $nourut++ }}</td>
                            <td>{{ $data->type }}</td>
                            <td>{{ $data->jenis }}</td>
                            <td>{{ date('d-m-Y', strtotime($data->tanggal)) }}</td>
                            <td>{{ $data->lokasi }}</td>
                            <td>{{ $data->nama_pelapor }}</td>
                            <td>{{ $data->nama_teknisi }}</td>
                            <td>{{ $data->kegiatan_perbaikan }}</td>
                            <td>{{ $data->pihak_terlibat }}</td>
                            <td>Rp. {{ number_format($data->biaya, 0, ',', '.') }}</td>
                            <td><img src="{{ asset($data->foto)}}" width="50px" height="50px"></a></td>
                          </tr>
                          @endforeach
                    </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
