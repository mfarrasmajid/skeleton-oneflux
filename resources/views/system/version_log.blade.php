@extends('layouts.main')

@section('title', 'Version Log')

@section('toolbar')
<div class="app-header-wrapper d-flex align-items-center justify-content-around justify-content-lg-between flex-wrap gap-6 gap-lg-0 mb-6 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
    <!--begin::Page title-->
    <div class="d-flex flex-column justify-content-center">
        <!--begin::Title-->
        <h1 class="text-gray-900 fw-bold fs-2x mb-2">Version Log</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
                <a href="{{ url('/') }}" class="text-muted text-hover-success">Portal</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">/</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">Version Log</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
    {{-- <div class="d-none d-md-block h-40px border-start border-gray-200 mx-10"></div> --}}
    <div class="d-flex gap-3 gap-lg-8 flex-wrap">
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-sm mb-5">
            <div class="card-header">
                <div class="card-title d-flex flex-column pt-5">
                    <h1 class="fs-1 fw-bolder">Skeleton OneFlux v1.0</h1>
                    <div class="fs-6 text-muted">Release Date: 1 Desember 2024</div>
                </div>
            </div>
            <div class="card-body">
                <div class="fs-3 fw-bolder mb-5">Changelog v1.0</div>
                <div class="d-flex flex-row mb-2">
                    <div class="d-flex w-30px">
                        1. 
                    </div>
                    <div class="d-flex flex-column">
                        <div class="fs-6">Lorem ipsum dolor sit amet</div>
                    </div>
                </div>
                <div class="d-flex flex-row mb-2">
                    <div class="d-flex w-30px">
                        2. 
                    </div>
                    <div class="d-flex flex-column">
                        <div class="fs-6">Lorem ipsum dolor sit amet</div>
                    </div>
                </div>
                <div class="d-flex flex-row mb-2">
                    <div class="d-flex w-30px">
                        3. 
                    </div>
                    <div class="d-flex flex-column">
                        <div class="fs-6">Lorem ipsum dolor sit amet</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
