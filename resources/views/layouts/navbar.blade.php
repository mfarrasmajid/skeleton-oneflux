<div class="app-navbar flex-shrink-0 gap-2 gap-lg-4">
    <!--begin::My apps links-->
    <div class="app-navbar-item">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon border border-200 bg-gray-100 btn-color-gray-600 btn-active-color-danger w-40px h-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-element-11 fs-4"></i>
        </div>
        <!--begin::My apps-->
        <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">My Apps</div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-5">
                    <!--begin::Scroll-->
                    <div class="mh-450px scroll-y me-n5 pe-5">
                        <!--begin::Row-->
                        <div class="row g-2">
                            <!--begin::Col-->
                            <div class="col-4">
                                <a href="https://oneflux.mitratel.co.id" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-danger bg-hover-light rounded py-4 px-3 mb-3">
                                    <img src="{{ asset('/_oneflux/icon-mesop.png')}}" class="w-25px h-25px mb-2" alt="" />
                                    <span class="fw-semibold">OneFlux</span>
                                </a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-4">
                                <a href="https://it-oneflux.mitratel.co.id" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-danger bg-hover-light rounded py-4 px-3 mb-3">
                                    <img src="{{ asset('/_oneflux/icon-it-oneflux.png')}}" class="w-25px h-25px mb-2" alt="" />
                                    <span class="fw-semibold">IT OneFlux</span>
                                </a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-4">
                                <a href="https://corsec-oneflux.mitratel.co.id" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-danger bg-hover-light rounded py-4 px-3 mb-3">
                                    <img src="{{ asset('/_oneflux/icon-corsec-oneflux.png')}}" class="w-25px h-25px mb-2" alt="" />
                                    <span class="fw-semibold">Corsec OneFlux</span>
                                </a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-4">
                                <a href="https://pmo-oneflux.mitratel.co.id" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-danger bg-hover-light rounded py-4 px-3 mb-3">
                                    <img src="{{ asset('/_oneflux/icon-pmo-oneflux.png')}}" class="w-25px h-25px mb-2" alt="" />
                                    <span class="fw-semibold">PMO OneFlux</span>
                                </a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-4">
                                <a href="https://finance-oneflux.mitratel.co.id" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-danger bg-hover-light rounded py-4 px-3 mb-3">
                                    <img src="{{ asset('/_oneflux/icon-finance-oneflux.png')}}" class="w-25px h-25px mb-2" alt="" />
                                    <span class="fw-semibold">Finance OneFlux</span>
                                </a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-4">
                                <a href="https://saham.mitratel.co.id" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-danger bg-hover-light rounded py-4 px-3 mb-3">
                                    <img src="{{ asset('/_oneflux/icon-mesop.png')}}" class="w-25px h-25px mb-2" alt="" />
                                    <span class="fw-semibold">Mesop</span>
                                </a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-4">
                                <a href="https://moves.mitratel.co.id/mitratel_sehat/public/dashboard" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-danger bg-hover-light rounded py-4 px-3 mb-3">
                                    <img src="{{ asset('/_oneflux/icon-moves.png')}}" class="w-25px h-25px mb-2" alt="" />
                                    <span class="fw-semibold">Moves</span>
                                </a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::My apps-->
        <!--end::Menu wrapper-->
    </div>
    <div class="app-navbar-item" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            @if (session()->get('user')->profile_picture)
            <div class="symbol-label" style="background-image: url({{ asset('shared_storage')}}/{{session()->get('user')->profile_picture}}); background-position: center center;"></div>
            @else
            <div class="symbol-label" style="background-image: url({{ asset('assets/media/svg/avatars/blank.svg')}}); background-position: center center;"></div>
            @endif
        </div>
        <!--begin::User account menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        @if (session()->get('user')->profile_picture)
                        <div class="symbol-label" style="background-image: url({{ asset('shared_storage')}}/{{session()->get('user')->profile_picture}}); background-position: center center;"></div>
                        @else
                        <div class="symbol-label" style="background-image: url({{ asset('assets/media/svg/avatars/blank.svg')}}); background-position: center center;"></div>
                        @endif
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Username-->
                    <div class="d-flex flex-column">
                        <div class="fw-bold d-flex align-items-center fs-5">{{ Session::get('user')->name }} 
                        <span class="badge badge-light-danger fw-bold fs-8 px-2 py-1 ms-2">User</span></div>
                        <a href="#" class="fw-semibold text-muted text-hover-danger fs-7">{{ Session::get('user')->email }}</a>
                    </div>
                    <!--end::Username-->
                </div>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="{{ url('/')}}" class="menu-link px-5">Kembali ke Portal</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="{{ url('/version_log')}}" class="menu-link px-5">Version Log</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-5 my-1">
                <a href="javascript:;" class="menu-link text-muted px-5">Skeleton v1.0</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="{{ url('/logout') }}" class="menu-link px-5">Sign Out</a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::User account menu-->
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
</div>