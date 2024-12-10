@extends('layouts.blank')

@section('title', 'Login')

@section('content')
<!--begin::Page bg image-->
<style>body { background-image: url('{{ asset("_oneflux/background.png")}}'); } [data-bs-theme="dark"] body { background-image: url('{{ asset("_oneflux/background.png")}}'); }</style>
<!--end::Page bg image-->
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-column-fluid flex-lg-row">
    <!--begin::Aside-->
    <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
        <!--begin::Aside-->
        <div class="d-flex flex-center flex-lg-start flex-column">
            <!--begin::Logo-->
            <a href="{{ url('/') }}" class="mb-7">
                <img alt="Logo" class="h-70px" src="{{ asset('_oneflux/logo.png')}}" />
            </a>
            <!--end::Logo-->
            <!--begin::Title-->
            <h2 class="text-white fw-normal m-0">Aplikasi Skeleton</h2>
            <!--end::Title-->
        </div>
        <!--begin::Aside-->
    </div>
    <!--begin::Aside-->
    <!--begin::Body-->
    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
        <!--begin::Card-->
        <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
            <!--begin::Wrapper-->
            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                <!--begin::Form-->
                <form class="form w-100" action="{{ url('/login') }}" method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-gray-900 fw-bolder mb-3">Login</h1>
                        <!--end::Title-->
                        <!--begin::Subtitle-->
                        <div class="text-gray-500 fw-semibold fs-6">ke Skeleton</div>
                        <!--end::Subtitle=-->
                    </div>
                    <!--begin::Heading-->
                    @if (session('error'))
                    <div class="text-danger mb-5">{{ session('error') }}</div>
                    @endif
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="text" id="username" placeholder="NIK" name="username" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::Email-->
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-3">
                        <div class="input-group mb-5">
                            <input id="password" type="password" class="form-control bg-transparent" name="password" placeholder="Password" autocomplete="off"/>
                            <button type="button" class="input-group-text" onclick="show_hide()">
                                <i class="ki-duotone ki-eye show-hide">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </button>
                        </div>
                        <!--end::Password-->
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                        <div></div>
                        <!--begin::Link-->
                        <a href="https://portal.telkom.co.id/login/forgot" class="link-danger">Lupa Password ?</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-danger">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Login</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Submit button-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Body-->
</div>
<!--end::Authentication - Sign-in-->
@endsection 

@section('styles')
@endsection 

@section('scripts')
<script>
    function show_hide() {
        var x = document.getElementById("password");
        var y = $(".show-hide");
        if (x.type === "password") {
            x.type = "text";
            y.removeClass("ki-eye");
            y.addClass("ki-eye-slash");
        } else {
            x.type = "password";
            y.addClass("ki-eye");
            y.removeClass("ki-eye-slash");
        }
    }

</script>
@endsection
