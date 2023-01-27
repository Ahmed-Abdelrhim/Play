{{--<div class="modal fade text-left" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">--}}
<div class="modal fade text-left" id="modalCreate{{$role->id}}" tabindex="-1">
    {{--    <div class="modal-dialog modal-lg" role="document">--}}
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> {{$role->name}}</h4>
                {{-- <button class="close" data-dismiss="modal" aria-label="close">--}}
                <button class="close" data-dismiss="modal">
                    {{-- <span aria-hidden="true">&times;</span>--}}
                    <span>&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>


{{--{{ Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']) }}--}}
{{--<div class="modal-body">--}}
{{--    <div class="row">--}}
{{--        <div class="form-group">--}}
{{--            {{ Form::label('name', __('Name'), ['class' => 'form-label']) }}--}}
{{--            --}}{{--            @if ($role->name == 'employee')--}}
{{--            <p class="form-control">{{ $role->name }}</p>--}}
{{--            --}}{{--            @else--}}
{{--            <div class="form-icon-user">--}}
{{--                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('Enter Role Name')]) }}--}}
{{--            </div>--}}
{{--            --}}{{--            @endif--}}
{{--            @error('name')--}}
{{--            <span class="invalid-name" role="alert">--}}
{{--                    <strong class="text-danger">{{ $message }}</strong>--}}
{{--                </span>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div class="form-group">--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="modal-footer">--}}
{{--    <button type="button" class="btn  btn-light" data-bs-dismiss="modal">{{ __('Cancel') }}</button>--}}
{{--    <input type="submit" value="{{ __('Update') }}" class="btn  btn-primary">--}}
{{--</div>--}}
{{--{{ Form::close() }}--}}


{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $("#checkall").click(function () {--}}
{{--            $('input:checkbox').not(this).prop('checked', this.checked);--}}
{{--        });--}}
{{--        $(".ischeck").click(function () {--}}
{{--            var ischeck = $(this).data('id');--}}
{{--            $('.isscheck_' + ischeck).prop('checked', this.checked);--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
