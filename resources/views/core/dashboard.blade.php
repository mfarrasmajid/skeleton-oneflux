@extends('layouts.main')

@section('title', 'Dashboard Skeleton')

@section('toolbar')
<div class="app-header-wrapper d-flex align-items-center justify-content-around justify-content-lg-between flex-wrap gap-6 gap-lg-0 mb-6 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
    <!--begin::Page title-->
    <div class="d-flex flex-column justify-content-center">
        <!--begin::Title-->
        <h1 class="text-gray-900 fw-bold fs-2x mb-2">Dashboard Skeleton</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">Dashboard Skeleton</li>
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
<!--begin::Row-->
<div class="row g-5">
    @if (session('success'))
    <div class="col-xl-12">
        <div class="alert alert-success d-flex align-items-center p-5 mb-10">
            <span class="svg-icon svg-icon-2hx svg-icon-success me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"/>
                <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"/>
                </svg>
            </span>
            <div class="d-flex flex-column">
                <h6 class="mb-1 text-success">{{ session('success') }}</h6>
            </div>
        </div>
    </div>
    @endif
    @if (session('error'))
    <div class="col-xl-12">
        <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
            <span class="svg-icon svg-icon-2hx svg-icon-danger me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"/>
                <rect x="9" y="13.0283" width="7.3536" height="1.2256" rx="0.6128" transform="rotate(-45 9 13.0283)" fill="currentColor"/>
                <rect x="9.86664" y="7.93359" width="7.3536" height="1.2256" rx="0.6128" transform="rotate(45 9.86664 7.93359)" fill="currentColor"/>
                </svg>
            </span>
            <div class="d-flex flex-column">
                <h6 class="mb-1 text-danger">{{ session('error') }}</h6>
            </div>
        </div>
    </div>
    @endif
    <!--begin::Col-->
    <div class="col-xl-6">
        <div class="card card-flush mb-5" style="background: linear-gradient(180deg, rgb(122, 8, 8) 0%, rgb(201, 57, 57) 100%);">
            <!--begin::Header-->
            <div class="card-header align-items-center pt-6">
                <!--begin::Symbol-->
                <div class="symbol symbol-50px me-4">
                    <div class="symbol-label bg-transparent rounded-lg" style="border: 1px dashed rgba(255, 255, 255, 0.20)">
                        <i class="ki-outline ki-messages text-white fs-1"></i>
                    </div>
                </div>
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="card-title flex-column flex-grow-1">
                    <span class="card-label fw-bold fs-1 text-white">Selamat Pagi, {{Session::get('user')->name}}!</span>
                    <span class="text-white opacity-50 fw-semibold fs-4">Outstanding anda:</span>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-row-fluid">
                    <!--begin::Block-->
                    <div class="d-flex flex-column">
                        <!--begin::Stats-->
                        <div class="d-flex align-items-center mb-1">
                            <!--begin::Amount-->
                            <span class="fs-6x fw-bold text-white me-2">0 tugas</span>
                            <!--end::Amount-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Total-->
                        <span class="fw-semibold text-white opacity-50">menunggu diproses</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Block-->
                    <!--begin::Chart-->
                    <a href="{{ url('/skeleton/outstanding')}}" class="btn btn-sm btn-text-white bg-white bg-opacity-10" style="border: 1px solid rgba(255, 255, 255, 0.20)">Cek Outstanding</a>
                    <!--end::Chart-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Card body-->
        </div>
        <div class="card card-flush mb-5">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800">List Skeleton</span>
                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Personal List</span>
                </h3>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <a href="{{ url('/skeleton/list') }}" class="btn btn-sm btn-light">Ke List Skeleton</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-4">
                        <!--begin::Table body-->
                        <tbody>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="javascript:;" class="text-gray-800 fw-bold text-hover-danger mb-1 fs-6">Draft</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">0</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="javascript:;" class="text-gray-800 fw-bold text-hover-danger mb-1 fs-6">On Progress</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">0</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="javascript:;" class="text-gray-800 fw-bold text-hover-danger mb-1 fs-6">Done</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">0</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="javascript:;" class="text-gray-800 fw-bold text-hover-danger mb-1 fs-6">Cancel</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">0</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-xl-6 mb-10">
        <div class="card card-flush mb-5" style="background: linear-gradient(180deg, #1858FD 0%, #1652EA 100%); box-shadow: 0px 14px 40px 0px rgba(24, 85, 243, 0.20);">
            <!--begin::Header-->
            <div class="card-header align-items-center py-6">
                <!--begin::Symbol-->
                <div class="symbol symbol-50px me-4">
                    <div class="symbol-label bg-transparent rounded-lg" style="border: 1px dashed rgba(255, 255, 255, 0.20)">
                        <i class="ki-outline ki-pencil text-white fs-1"></i>
                    </div>
                </div>
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="card-title flex-column flex-grow-1">
                    <span class="card-label fw-bold fs-3 text-white">Pengajuan Baru</span>
                    <span class="text-white opacity-50 fw-semibold fs-base">Buat Skeleton untuk pengajuan baru</span>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <a href="{{ url('/skeleton/create') }}" class="btn btn-sm btn-text-white bg-white bg-opacity-10" style="border: 1px solid rgba(255, 255, 255, 0.20)">Buat Skeleton</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
        </div>
        <div class="card card-flush">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-900">Menu Skeleton</span>
                    <span class="text-gray-500 mt-1 fw-semibold fs-6">Akses menu skeleton disini</span>
                </h3>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Title-->
                    <a href="{{ url('/maintenance')}}" class="text-danger opacity-75-hover fs-6 fw-semibold">Maintenance</a>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <a href="{{ url('/maintenance')}}" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-danger justify-content-end">
                        <i class="ki-outline ki-exit-right-corner fs-2"></i>
                    </a>
                    <!--end::Action-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Title-->
                    <a href="{{ url('/not_active')}}" class="text-danger opacity-75-hover fs-6 fw-semibold">Not Active</a>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <a href="{{ url('/not_active')}}" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-danger justify-content-end">
                        <i class="ki-outline ki-exit-right-corner fs-2"></i>
                    </a>
                    <!--end::Action-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Title-->
                    <a href="{{ url('/version_log')}}" class="text-danger opacity-75-hover fs-6 fw-semibold">Version Log</a>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <a href="{{ url('/version_log')}}" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-danger justify-content-end">
                        <i class="ki-outline ki-exit-right-corner fs-2"></i>
                    </a>
                    <!--end::Action-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>
@stop

@section('styles')
@stop
 
@section('scripts')
@stop 