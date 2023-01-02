{{-- Success Message --}}
@if (Session::has('success'))
    <script>
        swal({
            text: " {!! Session::get('success') !!}",
            icon: "success",
        })
    </script>
@endif


{{--@if(session()->has('success'))--}}
{{--    <div class="callout callout-success">--}}
{{--        <h5 class="text-success">--}}
{{--            <i class="fa fa-check"></i> {{__('Success')}}--}}
{{--        </h5>--}}
{{--        <p>--}}
{{--            {{session()->get('success')}}--}}
{{--        </p>--}}
{{--    </div>--}}
{{--@endif--}}


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
