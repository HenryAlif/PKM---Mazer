{{-- @extends('layouts.app') --}}
@extends('layouts.template_default')

@section('content')
@include('includes.header')

            <section class="section">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Train Name</h4>
                    </div>
                    <div class="card-body">
                        KA. Dharmawangsa
                        Code : <strong>0X0X</strong>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Departure Schedule</h4>
                    </div>
                    <div class="card-body">
                    Monday, 28 February 2023
                    Jakarta, 10:00 WIB
                    </div>
                </div>
            </div><div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Machinist</h4>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-block">
                            Ahmad Saugi
                        </button>
                    </div>
                </div>
            </div><div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Railroad Technician</h4>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-success">
                            Active
                            <span class="badge bg-transparent">6</span>
                        </button>
                        <button type="button" class="btn btn-danger">
                            Backup
                            <span class="badge bg-transparent">6</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

        {{-- <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-4 col-lg-4 col-md-1">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Train Name</h6>
                                    <h6 class="font-extrabold mb-0">KA. Dharmawangsa | Code : <strong>0X0X</strong></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-4 col-md-1">
                    <div class="card">
                        <div class="card-body px-5 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Departure</h6>
                                    <h6 class="font-extrabold mb-0">Monday, 28 February 2023 | Jakarta, 10:00 WIB</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-4 col-md-1">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Machinist</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-4 col-md-1">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Technician</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Train Name</h4>
                    </div>
                    <div class="card-body">
                        KA. Dharmawangsa | Code : <strong>0X0X</strong>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Train Name</h4>
                    </div>
                    <div class="card-body">
                        KA. Dharmawangsa | Code : <strong>0X0X</strong>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Train Name</h4>
                    </div>
                    <div class="card-body">
                        KA. Dharmawangsa | Code : <strong>0X0X</strong>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Train Name</h4>
                    </div>
                    <div class="card-body">
                        KA. Dharmawangsa | Code : <strong>0X0X</strong>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
