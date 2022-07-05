<script>
    (function() {
        window.onload = function() {
            var preloader = document.querySelector(".page-loading");
            preloader.classList.remove("active");
            setTimeout(function() {
                preloader.remove();
            }, 2000);
        };
    })();
</script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('vendor/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js') }}"></script>
<script src="{{ asset('vendor/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js') }}"></script>
<script src="{{ asset('vendor/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.min.js') }}"></script>
<script src="{{ asset('vendor/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.min.js') }}"></script>
<script src="{{ asset('vendor/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js') }}"></script>
<script src="{{ asset('vendor/leaflet/dist/leaflet.js') }}"></script>
<script src="{{ asset('vendor/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js') }}"></script>
<script src="{{ asset('vendor/cleave.js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('vendor/filepond/dist/filepond.min.js') }}"></script>
<script src="{{ asset('vendor/nouislider/dist/nouislider.min.js') }}"></script>
<script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
<script src="{{ asset('js/theme.min.js') }}"></script>