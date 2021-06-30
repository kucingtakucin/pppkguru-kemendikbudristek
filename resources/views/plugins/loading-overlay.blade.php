@push('src-scripts')
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>

<script>
$.LoadingOverlaySetup({
    image: "{{asset('template-default/images/animation/ngabei-loading.gif')}}",
    imageAnimation: null,
    imageAutoResize: true,
    imageResizeFactor: 2.5
});
</script>
@endpush
