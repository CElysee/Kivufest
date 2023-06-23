@section('title', 'Dashboard - Transactions') @push('styles') @endpush
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
                                                <span>Transactions Listing</span>
                                            </h1>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Page title-->

                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                                <a href="{{'dashboard'}}" class="text-white"> <i class="ki-outline ki-home text-gray-700 fs-6"></i> </a>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                                Dashboard
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700">
                                                Transactions Listing
                                            </li>
                                            <!--end::Item-->
                                        </ul>
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Toolbar container-->

                                    <!--begin::Actions-->
                                    <div class="d-flex align-self-center flex-center flex-shrink-0">
                                        <a href="#" class="btn btn-sm btn-success d-flex flex-center ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                            <i class="ki-outline ki-plus-square fs-2"></i>
                                            <span>Invite</span>
                                        </a>

                                        <a href="#" class="btn btn-sm btn-dark ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"> Create <span class="d-none d-sm-inline">Target</span> </a>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            <!--end::Toolbar-->

                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                @if (session('success'))
                                    <div class="alert alert-secondary mb-0" role="alert">
                                        <strong>Success!</strong> {{ session('success') }}
                                    </div>
                            @endif
                            <!--begin::Card-->
                                <div class="card">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 pt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                                                <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Customers" />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                                <!--begin::Filter-->
                                                <div class="w-150px me-3">
                                                    <!--begin::Select2-->
                                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                                        <option></option>
                                                        <option value="all">All</option>
                                                        <option value="active">Active</option>
                                                        <option value="locked">Locked</option>
                                                    </select>
                                                    <!--end::Select2-->
                                                </div>
                                                <!--end::Filter-->

                                                <!--begin::Export-->
                                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal"><i class="ki-outline ki-exit-up fs-2"></i> Export</button>
                                                <!--end::Export-->

                                                <!--begin::Add customer-->
                                                <button data-target="#dark" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">
                                                    Add new Ticket
                                                </button>
                                                <!--end::Add customer-->
                                            </div>
                                            <!--end::Toolbar-->

                                            <!--begin::Group actions-->
                                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                                                <div class="fw-bold me-5"><span class="me-2" data-kt-customer-table-select="selected_count"></span> Selected</div>

                                                <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">
                                                    Delete Selected
                                                </button>
                                            </div>
                                            <!--end::Group actions-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                            <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                                    </div>
                                                </th>
                                                <th class="min-w-125px">Client Name</th>
                                                <th class="min-w-125px">Client Number</th>
                                                <th class="min-w-125px">Transaction Id</th>
                                                <th class="min-w-125px">Ticket Amount</th>
                                                <th class="min-w-125px">Created Date</th>
                                            </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-600">
                                            @foreach($transactions as $key => $transaction)
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-gray-800 text-hover-primary mb-1">{{$transaction->client_name}}</a>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">{{$transaction->phone_number}}</a>
                                                    </td>
                                                    <td>
                                                        {{$transaction->transaction_id}}
                                                    </td>
                                                    <td>
                                                        {{$transaction->amount}} RWF
                                                    </td>

                                                    <td>
                                                        {{$transaction->created_at}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->

                                <!--begin::Modals-->
                                <!--begin::Modal - Customers - Add-->
                                <div wire:ignore.self class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            @if (session('success'))
                                                <div class="btn btn-dark h-1 py-4 " role="alert" style="margin: 10px;">
                                                    <strong>Success!</strong> {{ session('success') }}
                                                </div>
                                        @endif
                                        <!--begin::Form-->
                                            <form class="form">
                                                <!--begin::Modal header-->
                                                <div class="modal-header" id="kt_modal_add_customer_header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bold">Add a Ticket</h2>
                                                    <!--end::Modal title-->

                                                    <!--begin::Close-->
                                                    <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                                        <i class="ki-outline ki-cross fs-1"></i>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Modal header-->

                                                <!--begin::Modal body-->
                                                <div class="modal-body py-10 px-lg-17">
                                                    <!--begin::Scroll-->
                                                    <div
                                                        class="scroll-y me-n7 pe-7"
                                                        id="kt_modal_add_customer_scroll"
                                                        data-kt-scroll="true"
                                                        data-kt-scroll-activate="{default: false, lg: true}"
                                                        data-kt-scroll-max-height="auto"
                                                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                                        data-kt-scroll-offset="300px"
                                                    >
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-semibold mb-2">Ticket Name</label>
                                                            <!--end::Label-->

                                                            <!--begin::Input-->
                                                            <input type="text" wire:model="ticket_title" class="form-control form-control-solid" placeholder="" name="ticket_title" value="Weekend Pass" />
                                                            <!--end::Input-->
                                                            @error('ticket_title') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-15">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold mb-2">Description</label>
                                                            <!--end::Label-->

                                                            <!--begin::Input-->
                                                            <textarea rows="5" wire:model="ticket_description" class="form-control form-control-solid" name="ticket_description"></textarea>
                                                            @error('ticket_description') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-semibold mb-2">Ticket Amount</label>
                                                            <!--end::Label-->

                                                            <!--begin::Input-->
                                                            <input type="number" wire:model="ticket_amount" class="form-control form-control-solid" placeholder="" name="ticket_amount" value="15000" />
                                                            <!--end::Input-->
                                                            @error('ticket_amount') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                        <!--begin::Billing form-->
                                                        <div id="kt_modal_add_customer_billing_info" class="collapse show">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex flex-stack">
                                                                    <!--begin::Label-->
                                                                    <div class="me-5">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-6 fw-semibold">Turn off ticket on the website</label>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input-->
                                                                        <div class="fs-7 fw-semibold text-muted">This ticket won't be displayed on then it checked</div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Label-->

                                                                    <!--begin::Switch-->
                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                        <!--begin::Input-->
                                                                        <input class="form-check-input" wire:model="ticket_status" name="ticket_status" type="checkbox" value="1" id="kt_modal_add_customer_billing" checked="checked" />
                                                                        <!--end::Input-->

                                                                        <!--begin::Label-->
                                                                        <span class="form-check-label fw-semibold text-muted" for="kt_modal_add_customer_billing">
                                                                                Yes
                                                                        </span>
                                                                        <!--end::Label-->
                                                                        @error('ticket_status') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    </label>
                                                                    <!--end::Switch-->
                                                                </div>
                                                                <!--begin::Wrapper-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Billing form-->
                                                    </div>
                                                    <!--end::Scroll-->
                                                </div>
                                                <!--end::Modal body-->

                                                <!--begin::Modal footer-->
                                                <div class="modal-footer flex-center">
                                                    <!--begin::Button-->
                                                    <button wire:click.prevent="cancel()" type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">
                                                        Discard
                                                    </button>
                                                    <!--end::Button-->

                                                    <!--begin::Button-->
                                                    <button wire:click.prevent="create()" type="submit" class="btn btn-primary">
                                                            <span class="indicator-label">
                                                                Submit
                                                            </span>
                                                        {{--                                                        <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>--}}
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                                <!--end::Modal footer-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal - Customers - Add--><!--begin::Modal - Adjust Balance-->
                                <div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Export Customers</h2>
                                                <!--end::Modal title-->

                                                <!--begin::Close-->
                                                <div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                                    <i class="ki-outline ki-cross fs-1"></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->

                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                <!--begin::Form-->
                                                <form id="kt_customers_export_form" class="form" action="#">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select name="country" data-control="select2" data-placeholder="Select a format" data-hide-search="true" name="format" class="form-select form-select-solid">
                                                            <option value="excell">Excel</option>
                                                            <option value="pdf">PDF</option>
                                                            <option value="cvs">CVS</option>
                                                            <option value="zip">ZIP</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input class="form-control form-control-solid" placeholder="Pick a date" name="date" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Row-->
                                                    <div class="row fv-row mb-15">
                                                        <!--begin::Label-->
                                                        <label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
                                                        <!--end::Label-->

                                                        <!--begin::Radio group-->
                                                        <div class="d-flex flex-column">
                                                            <!--begin::Radio button-->
                                                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                                                <input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type" />
                                                                <span class="form-check-label text-gray-600 fw-semibold">
                                                                        All
                                                                    </span>
                                                            </label>
                                                            <!--end::Radio button-->

                                                            <!--begin::Radio button-->
                                                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type" />
                                                                <span class="form-check-label text-gray-600 fw-semibold">
                                                                        Visa
                                                                    </span>
                                                            </label>
                                                            <!--end::Radio button-->

                                                            <!--begin::Radio button-->
                                                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                                                <input class="form-check-input" type="checkbox" value="3" name="payment_type" />
                                                                <span class="form-check-label text-gray-600 fw-semibold">
                                                                        Mastercard
                                                                    </span>
                                                            </label>
                                                            <!--end::Radio button-->

                                                            <!--begin::Radio button-->
                                                            <label class="form-check form-check-custom form-check-sm form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="4" name="payment_type" />
                                                                <span class="form-check-label text-gray-600 fw-semibold">
                                                                        American Express
                                                                    </span>
                                                            </label>
                                                            <!--end::Radio button-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Row-->

                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <button type="reset" id="kt_customers_export_cancel" class="btn btn-light me-3">
                                                            Discard
                                                        </button>

                                                        <button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
                                                                <span class="indicator-label">
                                                                    Submit
                                                                </span>
                                                            <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - New Card--><!--end::Modals-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->

                        <!--begin::Footer-->
                        <livewire:backend.footer />
                        <!--end::Footer-->
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
@push('scripts')
    <script type="text/javascript">
        window.livewire.on('userUpdate', () => {
            $('#kt_modal_add_customer').modal('hide');
        });

        window.livewire.on('userUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#dark').modal('hide');
        });
        window.livewire.on('userUpdate', () => {
            $('#updateModal').modal('hide');
        });
        // livewire.on('avatar_preview_updated', newticket => {
        //     $('.zero-configuration').DataTable().ajax.reload(originalJsonData,true)
        // });
    </script>
@endpush
