<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.js') }}"></script>
<script src="{{ asset('assets/vendor/slimscroll/slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor/slimscroll/custom-scrollbar.js') }}"></script>
<script src="{{ asset('assets/vendor/daterange/daterange.js') }}"></script>
<script src="{{ asset('assets/vendor/daterange/custom-daterange.js') }}"></script>
<script src="{{ asset('assets/vendor/datepicker/js/picker.js') }}"></script>
<script src="{{ asset('assets/vendor/datepicker/js/picker.date.js') }}"></script>
<script src="{{ asset('assets/vendor/datepicker/js/custom-picker.js') }}"></script>
<script src="{{ asset('assets/vendor/gallery/baguetteBox.js') }}" async></script>
<script src="{{ asset('assets/vendor/gallery/plugins.js') }}" async></script>
<script src="{{ asset('assets/vendor/gallery/custom-gallery.js') }}" async></script>
<script src="{{ asset('assets/vendor/input-tags/tagsinput.min.js') }}"></script>
<script src="{{ asset('assets/vendor/input-tags/typeahead.js') }}"></script>
<script src="{{ asset('assets/vendor/input-tags/tagsinput-custom.js') }}"></script>
<script src="{{ asset('assets/js/toster.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/bs-select/bs-select.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>	
    @php
        $success = '';
        if(\Session::has('success'))
            $success = \Session::get('success');

        $error = '';
        if(\Session::has('error'))
            $error = \Session::get('error');
    @endphp

    var success = "{{ $success }}";
    var error = "{{ $error }}";

    if(success != ''){
        toastr.success(success, 'Success');
    }

    if(error != ''){
        toastr.error(error, 'error');
    }

</script>
@yield('scripts')