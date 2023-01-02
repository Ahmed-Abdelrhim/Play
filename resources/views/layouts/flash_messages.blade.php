{{-- Success Message --}}
@if (Session::has('success'))
    <script>
        swal({
            text: " {!! Session::get('success') !!}",
            icon: "success",
        })
    </script>
@endif


{{-- Error Message --}}
@if (Session::has('error'))
    <script>
        swal({
            text: " {!! Session::get('error') !!}",
            icon: "error",
        })
    </script>
@endif

{{-- Error Message --}}
@if (Session::has('wrong'))
    <script>
        swal({
            text: " {!! Session::get('wrong') !!}",
            icon: "error",
        })
    </script>
@endif
