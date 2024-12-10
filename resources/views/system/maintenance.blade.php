@extends('layouts.blank')

@section('title', 'Maintenance')

@section('content')
<!--begin::Page bg image-->
<style>body { background-image: url('{{ asset("assets/media/auth/bg9.jpg")}}'); } [data-bs-theme="dark"] body { background-image: url('{{ asset("assets/media/auth/bg9-dark.jpg")}}'); }</style>
<!--end::Page bg image-->
<!--begin::Authentication - Signup Welcome Message -->
<div class="d-flex flex-column flex-center flex-column-fluid">
    <!--begin::Content-->
    <div class="d-flex flex-column flex-center text-center p-10">
        <!--begin::Wrapper-->
        <div class="card card-flush w-lg-650px py-5">
            <div class="card-body py-15 py-lg-20">
                <!--begin::Title-->
                <h1 class="fw-bolder fs-2hx text-gray-900 mb-4">Skeleton OneFlux<br>Maintenance Time!</h1>
                <!--end::Title-->
                <!--begin::Counter-->
				<div class="d-flex text-center justify-content-center mb-5">
					<div class="w-100px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
						<div class="fs-2 fw-bolder text-gray-800" id="kt_coming_soon_counter_days"></div>
						<div class="fs-7 fw-bold text-muted">days</div>
					</div>
					<div class="w-100px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
						<div class="fs-2 fw-bolder text-gray-800" id="kt_coming_soon_counter_hours"></div>
						<div class="fs-7 text-muted">hrs</div>
					</div>
					<div class="w-100px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
						<div class="fs-2 fw-bolder text-gray-800" id="kt_coming_soon_counter_minutes"></div>
						<div class="fs-7 text-muted">min</div>
					</div>
					<div class="w-100px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
						<div class="fs-2 fw-bolder text-gray-800" id="kt_coming_soon_counter_seconds"></div>
						<div class="fs-7 text-muted">sec</div>
					</div>
				</div>
				<!--end::Counter-->
                <!--begin::Illustration-->
                <div class="mb-3">
                    <img src="{{ asset('assets/media/auth/chart-graph.png')}}" class="mw-100 mh-300px theme-light-show" alt="" />
                    <img src="{{ asset('assets/media/auth/chart-graph-dark.png')}}" class="mw-100 mh-300px theme-dark-show" alt="" />
                </div>
                <!--end::Illustration-->
				<div class="fw-bolder fs-2 text-muted mb-5">Mohon maaf, aplikasi sedang dilakukan maintenance. Silakan refresh apabila counter waktu sudah berakhir.</div>
                <!--begin::Link-->
                <div class="mb-0">
                    <a href="{{ url('/') }}" class="btn btn-sm btn-success">Refresh Halaman</a>
                </div>
                <!--end::Link-->
            </div>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->
</div>
@stop 

@section('styles')
@stop 

@section('scripts')
<script>
    var KTSignupComingSoon = (function () {
        var e, t, o, n, i, r, a;
        return {
            init: function () {
                var s, u, l;
                (e = document.querySelector("#kt_coming_soon_form")),
                    (n = document.querySelector("#kt_coming_soon_counter_days")),
                    (i = document.querySelector("#kt_coming_soon_counter_hours")),
                    (r = document.querySelector("#kt_coming_soon_counter_minutes")),
                    (a = document.querySelector("#kt_coming_soon_counter_seconds")),
                    (s = new Date()),
                    (u = @php echo strtotime($data['maintenance']->date_end).'000'; @endphp ),
                    (l = function () {
                        var e = new Date().getTime(),
                            t = u - e,
                            o = Math.floor(t / 864e5),
                            s = Math.floor((t % 864e5) / 36e5),
                            l = Math.floor((t % 36e5) / 6e4),
                            c = Math.floor((t % 6e4) / 1e3);
                        (n.innerHTML = o), (i.innerHTML = s), (r.innerHTML = l), (a.innerHTML = c);
                    }),
                    setInterval(l, 1e3),
                    l();
            },
        };
    })();
    KTUtil.onDOMContentLoaded(function () {
        KTSignupComingSoon.init();
    });

</script>
@stop 
