@section('title', 'Dashboard') @push('styles') @endpush
<div>
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <livewire:backend.header />
            <!--End::Header-->

            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Wrapper container-->
                <div class="app-container container-xxl d-flex flex-row-fluid">
                    <!--begin::Sidebar-->
                    <div
                        id="kt_app_sidebar"
                        class="app-sidebar flex-column"
                        data-kt-drawer="true"
                        data-kt-drawer-name="app-sidebar"
                        data-kt-drawer-activate="{default: true, lg: false}"
                        data-kt-drawer-overlay="true"
                        data-kt-drawer-width="275px"
                        data-kt-drawer-direction="start"
                        data-kt-drawer-toggle="#kt_app_sidebar_toggle"
                    >
                        <livewire:backend.side-menu />
                        <!--end::Sidebar nav-->
                    </div>
                    <!--end::Sidebar-->

                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Toolbar-->
                            <div id="kt_app_toolbar" class="app-toolbar d-flex pb-3 pb-lg-5">
                                <!--begin::Toolbar container-->
                                <div class="d-flex flex-stack flex-row-fluid">
                                    <!--begin::Toolbar container-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Toolbar wrapper-->

                                        <!--begin::Page title-->
                                        <div class="page-title d-flex align-items-center me-3">
                                            <!--begin::Title-->
                                            <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-lg-2x gap-2">
                                                <span><span class="fw-light">Welcome back</span>,&nbsp;{{ Auth::user()->name }}</span>
                                                <!--begin::Description-->
                                                <span class="page-desc text-gray-600 fs-base fw-semibold">
                                                    You are logged in as a KivuFest Owner
                                                </span>
                                                <!--end::Description-->
                                            </h1>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Page title-->
                                    </div>
                                    <!--end::Toolbar container-->
                                    <!--end::Actions-->
                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            <!--end::Toolbar-->

                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10 mb-5 mb-xl-0">
                                @foreach($tickes_info as $key => $ticket)
                                    <!--begin::Col-->
                                    <div class="col-md-4 mb-xl-10">
                                        <!--begin::Card widget 28-->
                                        <div class="card card-flush">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-stack flex-row-fluid">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-45px me-5">
                                                        <span class="symbol-label bg-light-info"> <i class="ki-outline ki-instagram fs-2x text-gray-800"></i> </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Wrapper-->
                                                    <div class="me-n2">
                                                        <!--begin::Badge-->
                                                        <span class="fs-2 fw-bold text-success badge badge-light-success align-self-center fs-base"> <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i> {{$ticket->number_of_tickets}}</span>
                                                        <!--end::Badge-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Header-->
                                            </div>
                                            <!--end::Card title-->

                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bolder fs-2x text-dark">RWF {{$ticket->total_amount}}</span>
                                                    <span class="fw-bold fs-7 text-gray-500">{{$ticket->ticket_title}}</span>
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 28-->
                                    </div>
                                    <!--end::Col-->
                                @endforeach
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-6">
                                        <!--begin::List widget 23-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Recent Transactions</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar"></div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-5">
                                                <!--begin::Items-->
                                                <div class="">
                                                    <!--begin::Item-->
                                                    @foreach($recent_transactions as $key => $ticket)
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->

                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="{{asset('assets/logo/G-yNUEMq_400x400.jpg')}}" class="me-4 w-30px" style="border-radius: 4px;" alt="" />
                                                            <!--end::Flag-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$ticket->phone_number}}</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$ticket->client_name}}</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>

                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3 badge badge-light-success">{{$ticket->ticket_number}}</span>
                                                            <!--end::Number-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                        <div class="separator separator-dashed my-3"></div>
                                                 @endforeach
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end: Card Body-->
                                        </div>
                                        <!--end::List widget 23-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xl-6">
                                        <!--begin::Chart Widget 33-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5 mb-6">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Currency-->
                                                        <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
                                                        <!--end::Currency-->

                                                        <!--begin::Value-->
                                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                                                        <!--end::Value-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                            9.2%
                                                        </span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Statistics-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-400">Hourly rate</span>
                                                    <!--end::Description-->
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                        <i class="ki-outline ki-dots-square fs-1 text-gray-300 me-n1"></i>
                                                    </button>

                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Ticket
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Customer
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Admin Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Staff Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Member Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Contact
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary btn-sm px-4" href="#">
                                                                    Generate Reports
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->

                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body py-0 px-0">
                                                <!--begin::Nav-->
                                                <ul class="nav d-flex justify-content-between mb-3 mx-9">
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3">
                                                        <!--begin::Link-->
                                                        <a
                                                            class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active"
                                                            data-bs-toggle="tab"
                                                            id="kt_charts_widget_33_tab_1"
                                                            href="#kt_charts_widget_33_tab_content_1"
                                                        >
                                                            1d
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3">
                                                        <!--begin::Link-->
                                                        <a
                                                            class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                            data-bs-toggle="tab"
                                                            id="kt_charts_widget_33_tab_2"
                                                            href="#kt_charts_widget_33_tab_content_2"
                                                        >
                                                            5d
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3">
                                                        <!--begin::Link-->
                                                        <a
                                                            class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                            data-bs-toggle="tab"
                                                            id="kt_charts_widget_33_tab_3"
                                                            href="#kt_charts_widget_33_tab_content_3"
                                                        >
                                                            1m
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3">
                                                        <!--begin::Link-->
                                                        <a
                                                            class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                            data-bs-toggle="tab"
                                                            id="kt_charts_widget_33_tab_4"
                                                            href="#kt_charts_widget_33_tab_content_4"
                                                        >
                                                            6m
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3">
                                                        <!--begin::Link-->
                                                        <a
                                                            class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                            data-bs-toggle="tab"
                                                            id="kt_charts_widget_33_tab_5"
                                                            href="#kt_charts_widget_33_tab_content_5"
                                                        >
                                                            1y
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                </ul>
                                                <!--end::Nav-->

                                                <!--begin::Tab Content-->
                                                <div class="tab-content mt-n6">
                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade active show" id="kt_charts_widget_33_tab_content_1">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_1" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                <tr>
                                                                    <th class="min-w-100px"></th>
                                                                    <th class="min-w-100px text-end pe-0"></th>
                                                                    <th class="text-end min-w-50px"></th>
                                                                </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-danger">-139.34</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-success">+576.24</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-success">+124.03</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade" id="kt_charts_widget_33_tab_content_2">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_2" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                <tr>
                                                                    <th class="min-w-100px"></th>
                                                                    <th class="min-w-100px text-end pe-0"></th>
                                                                    <th class="text-end min-w-50px"></th>
                                                                </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-success">+231.01</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-primary">+233.07</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,145.55</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-danger">+134.06</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade" id="kt_charts_widget_33_tab_content_3">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_3" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                <tr>
                                                                    <th class="min-w-100px"></th>
                                                                    <th class="min-w-100px text-end pe-0"></th>
                                                                    <th class="text-end min-w-50px"></th>
                                                                </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">12:40 AM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,346.25</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-warning">+134.57</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">11:30 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1,565.26</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-danger">+155.03</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">4:25 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-success">+124.03</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade" id="kt_charts_widget_33_tab_content_4">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_4" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                <tr>
                                                                    <th class="min-w-100px"></th>
                                                                    <th class="min-w-100px text-end pe-0"></th>
                                                                    <th class="text-end min-w-50px"></th>
                                                                </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:20 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-danger">+234.03</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">10:30 AM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1,474.04</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-info">-134.03</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">1:30 AM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-primary">+124.03</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade" id="kt_charts_widget_33_tab_content_5">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_5" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                <tr>
                                                                    <th class="min-w-100px"></th>
                                                                    <th class="min-w-100px text-end pe-0"></th>
                                                                    <th class="text-end min-w-50px"></th>
                                                                </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.25</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-primary">+144.04</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-danger">+124.03</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,034.65</span>
                                                                    </td>

                                                                    <td class="pe-0 text-end">
                                                                        <span class="fw-bold fs-6 text-success">+184.05</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->
                                                </div>
                                                <!--end::Tab Content-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Chart Widget 33-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                        <livewire:backend.footer />

                    </div>
                    <!--end:::Main-->

                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->
</div>
@push('scripts') @endpush
