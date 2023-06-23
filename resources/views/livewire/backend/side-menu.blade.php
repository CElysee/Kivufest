<div>
    <!--begin::Sidebar nav-->
    <div class="app-sidebar-wrapper py-8 py-lg-10" id="kt_app_sidebar_wrapper">
        <!--begin::Nav wrapper-->
        <div
            id="kt_app_sidebar_nav_wrapper"
            class="d-flex flex-column px-8 px-lg-10 hover-scroll-y"
            data-kt-scroll="true"
            data-kt-scroll-activate="true"
            data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="{default: false, lg: '#kt_app_header'}"
            data-kt-scroll-wrappers="#kt_app_sidebar, #kt_app_sidebar_wrapper"
            data-kt-scroll-offset="{default: '10px', lg: '40px'}"
        >
            <!--begin::Progress-->
            <div class="d-flex align-items-center flex-column w-100 mb-8 mb-lg-10">
                <div class="d-flex justify-content-between fw-bolder fs-6 text-gray-800 w-100 mt-auto mb-3">
                    <span>Your Goal</span>
                </div>

                <div class="w-100 bg-light-info rounded mb-2" style="height: 24px;">
                    <div class="bg-info rounded" role="progressbar" style="height: 24px; width: 37%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="fw-semibold fs-7 text-primary w-100 mt-auto">
                    <span>reached 37% of your target</span>
                </div>
            </div>
            <!--end::Progress-->

            <!--begin::Stats-->
            <div class="d-flex mb-8 mb-lg-10">
                <!--begin::Stat-->
                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6">
                    <!--begin::Date-->
                    <span class="fs-6 text-gray-500 fw-bold">Total Amount</span>
                    <!--end::Date-->

                    <!--begin::Label-->
                    <div class="fs-2 fw-bold text-success">{{$total_amount}} RWF</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
                <!--begin::Stat-->
                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4">
                    <!--begin::Date-->
                    <span class="fs-6 text-gray-500 fw-bold">NUmber of tickets</span>
                    <!--end::Date-->

                    <!--begin::Label-->
                    <div class="fs-2 fw-bold text-danger">{{$numberoftickets}}</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
            </div>
            <!--end::Stats-->

            <!--begin::Links-->
            <div class="mb-0">
                <!--begin::Title-->
                <h3 class="text-gray-800 fw-bold mb-8">Menus</h3>
                <!--end::Title-->

                <!--begin::Row-->
                <div class="row g-5" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                    <!--begin::Col-->
                    <div class="col-6">
                        <!--begin::Link-->
                        <a href="{{'/dashboard'}}" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200" data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2"> <i class="ki-outline ki-tablet-book fs-1"></i> </span>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Dashboard</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>

                    <div class="col-6">
                        <!--begin::Link-->
                        <a href="{{'/users'}}" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200" data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2"> <i class="ki-outline ki-calendar fs-1"></i> </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Users</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                        <!--begin::Link-->
                        <a href="{{'/ticket'}}" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200" data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2"> <i class="ki-outline ki-tablet-book fs-1"></i> </span>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Tickets</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                        <!--begin::Link-->
                        <a href="{{'/transactions'}}" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200" data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2"> <i class="ki-outline ki-wifi-home fs-1"></i> </span>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Transactions</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Links-->
        </div>
        <!--end::Nav wrapper-->
    </div>
</div>
