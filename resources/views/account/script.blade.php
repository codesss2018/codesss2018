<script>
var colors = {
    "danger-color": "#e74c3c",
    "success-color": "#81b53e",
    "warning-color": "#f0ad4e",
    "inverse-color": "#2c3e50",
    "info-color": "#2d7cb5",
    "default-color": "#6e7882",
    "default-light-color": "#cfd9db",
    "purple-color": "#9D8AC7",
    "mustard-color": "#d4d171",
    "lightred-color": "#e15258",
    "body-bg": "#f6f6f6"
};
var config = {
    theme: "html",
    skins: {
        "default": {
            "primary-color": "#42a5f5"
        }
    }
};
</script>
<!-- Separate Vendor Script Bundles -->
<script src="{{ asset('js/vendor-core.min.js') }}"></script>
<script src="{{ asset('js/vendor-countdown.min.js') }}"></script>
<script src="{{ asset('js/vendor-tables.min.js') }}"></script>
<script src="{{ asset('js/vendor-forms.min.js') }}"></script>
<script src="{{ asset('js/vendor-carousel-slick.min.js') }}"></script>
<script src="{{ asset('js/vendor-player.min.js') }}"></script>
<script src="{{ asset('js/vendor-charts-flot.min.js') }}"></script>
<script src="{{ asset('js/vendor-nestable.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/module-essentials.min.js') }}"></script>
<script src="{{ asset('js/module-material.min.js') }}"></script>
<script src="{{ asset('js/module-layout.min.js') }}"></script>
<script src="{{ asset('js/module-sidebar.min.js') }}"></script>
<script src="{{ asset('js/module-carousel-slick.min.js') }}"></script>
<script src="{{ asset('js/module-player.min.js') }}"></script>
<script src="{{ asset('js/module-messages.min.js') }}"></script>
<script src="{{ asset('js/module-maps-google.min.js') }}"></script>
<script src="{{ asset('js/module-charts-flot.min.js') }}"></script>
<!-- [html] Core Theme Script:
    Includes the custom JavaScript for this theme/module;
    The file has to be loaded in addition to the UI modules above;
    module-bundle-main.js already includes theme-core.js so this should be loaded
    ONLY when using the standalone modules; -->
<script src="{{ asset('js/theme-core.min.js') }}"></script>
<script src="{{ asset('js/sbk.js') }}"></script>
