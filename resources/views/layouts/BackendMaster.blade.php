<!DOCTYPE html>
<html lang="en"  data-bs-theme-mode="light" >
<!--begin::Head-->
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="../demo1/index.html"/>
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico')}}"/>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <!-- END: Custom CSS-->
    @livewireStyles
    @stack('styles')
</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  class="app-default" >
<!--begin::Theme mode setup on page load-->
{{$slot}}

<script>
    var defaultThemeMode = "light";
    var themeMode;

    if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if ( localStorage.getItem("data-bs-theme") !== null ) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->
<!--Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->


<!--begin::App-->

<script>
    var hostUrl = "/assets/";
</script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/index.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/xy.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/percent.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/radar.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/themes/Animated.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/map.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/geodata/worldLow.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/geodata/continentsLow.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/geodata/usaLow.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js')}}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js')}}"></script>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('assets/js/widgets.bundle.js')}}"></script>
<script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/new-target.js')}}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
<script src="{{ asset('assets/js/custom/listing.js')}}"></script>
<script src="{{ asset('assets/js/custom/add.js')}}"></script>
<script src="{{ asset('assets/js/custom/export.js')}}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
@livewireScripts
@stack('scripts')
</body>
</html>

