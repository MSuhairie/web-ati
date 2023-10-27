<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@extends('Admin/Layout/index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-xs mb-0 text-uppercase font-weight-bold">Data Laporan</p>
                  <h5 class="font-weight-bolder">{{ $laporans->total_semua_laporan }}</h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-collection text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-xs mb-0 text-uppercase font-weight-bold">Sudah Diterima Admin</p>
                  <h5 class="font-weight-bolder">{{ $laporans->sudah_diterima_admin }}</h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-single-copy-04 text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-xs mb-0 text-uppercase font-weight-bold">Sedang Dikerjakan</p>
                  <h5 class="font-weight-bolder">{{ $laporans->sedang_dikerjakan }}</h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-delivery-fast text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-xs mb-0 text-uppercase font-weight-bold">Selesai</p>
                  <h5 class="font-weight-bolder">{{ $laporans->selesai }}</h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w3-container mt-9">

        <div class="w3-row">
          <a href="javascript:void(0)" onclick="openCity(event, 'London');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Laporan Sudah Diterima Admin</div>
          </a>
          <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Laporan Sedang Dikerjakan</div>
          </a>
          <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Laporan Selesai</div>
          </a>
        </div>

        <div id="London" class="w3-container city mt-2">
                <div class="row">
                  <div class="col-12">
                    <div class="card mb-4">
                      <div class="card-header pb-0">
                        <h6>Data Laporan Sudah Diterima Admin</h6>
                      </div>
                      <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container mt-4">
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

                                        @foreach ($laporans1 as $data)
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
        </div>

        <div id="Paris" class="w3-container city mt-2" style="display:none">
            <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header pb-0">
                      <h6>Data Laporan Sedang Dikerjakan</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                          <div class="container mt-4">
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

                                      @foreach ($laporans2 as $data)
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
        </div>

        <div id="Tokyo" class="w3-container city mt-2" style="display:none">
          <div class="row">
                  <div class="col-12">
                    <div class="card mb-4">
                      <div class="card-header pb-0">
                        <h6>Data Laporan Selesai</h6>
                      </div>
                      <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container mt-4">
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

                                        @foreach ($laporans3 as $data)
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
        </div>
      </div>

      <script>
      function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" w3-border-blue", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-border-blue";
      }
      </script>

@endsection
