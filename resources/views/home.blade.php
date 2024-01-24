@extends('layouts.dashboard')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="row w-100 flex-grow">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <p class="card-title">Omset Harian </p>
                                    <!-- <p class="text-success font-weight-medium"></p> -->
                                </div>
                                <div class="d-flex align-items-center flex-wrap mb-3">
                                    <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">Rp. {{$totalRevenue}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <p class="card-title">Pelanggan Baru(H-7)</p>
                                </div>
                                <div class="d-flex align-items-center flex-wrap mb-3">
                                    <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">{{$registeredUsersCount}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <p class="card-title">Perlu dikirim</p>
                                </div>
                                <div class="d-flex align-items-center flex-wrap mb-3">
                                    <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">{{$shippingCount}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <p class="card-title">Total Produk</p>
                                </div>
                                <div class="d-flex align-items-center flex-wrap mb-3">
                                    <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">{{$productCount}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
