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
{{-- <!-- <script src="{{ asset('js/vendor-angular.min.js') }}"></script> --> --}}
<!-- Compressed Vendor Scripts Bundle
Includes all of the 3rd party JavaScript libraries above.
The bundle was generated using modern frontend development tools that are provided with the package
To learn more about the development process, please refer to the documentation.
Do not use it simultaneously with the separate bundles above. -->
<!-- <script src="js/vendor-bundle-all.min.js"></script> -->
<!-- Compressed App Scripts Bundle
Includes Custom Application JavaScript used for the current theme/module;
Do not use it simultaneously with the standalone modules below. -->
<!-- <script src="js/module-bundle-main.min.js"></script> -->
<!-- Standalone Modules
As a convenience, we provide the entire UI framework broke down in separate modules
Some of the standalone modules may have not been used with the current theme/module
but ALL the modules are 100% compatible -->
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
