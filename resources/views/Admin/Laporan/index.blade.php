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
                            <label class="form-control-label">Dari:</label>
                            <input type="date" class="form-control" name="start_date" value="{{ old('start_date') }}">
                          </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                              <label class="form-control-label">Sampai:</label>
                              <input type="date" class="form-control" name="end_date" value="{{ old('end_date') }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="status" class="form-control-label">Status:</label>
                                <select name="status" id="status" class="form-control" value="{{ old('status') }}">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="sudah diterima admin">Sudah Diterima Admin</option>
                                    <option value="sedang dikerjakan">Sedang Dikerjakan</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group" style="margin-top: 31px;">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                        @if(isset($filterData))
                        <div class="col-md-2">
                            <div class="form-group" style="margin-top: 31px;">
                                <a class="btn btn-outline-primary btn-sm mb-0 float-end" href="{{ route('cetaklaporan', $filterData) }}" target="_blank">Cetak Data</a>
                            </div>
                        </div>
                        @else
                        <div class="col-md-2">
                            <div class="form-group" style="margin-top: 31px;">
                                <a class="btn btn-outline-primary btn-sm mb-0 float-end" href="{{ route('cetaklaporan') }}" target="_blank">Cetak Data</a>
                            </div>
                        </div>
                        @endif

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
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
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
                            <td>
                                <a class="btn btn-success text-xs px-3" href="{{ route('detailcetak', $data->id) }}" target="_blank">Cetak</a>
                            </td>
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
