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
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Laporan</p>
                  <h5 class="font-weight-bolder">{{ $laporans }}</h5>
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

@endsection
